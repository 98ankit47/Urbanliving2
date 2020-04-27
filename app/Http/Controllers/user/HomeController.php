<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Homes;
use App\Models\Communities;
use App\Models\HomeCommunity;
use App\Models\Enquiry;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        $data=$request['search'];
         $count=Homes::where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get('title')->count();
         if($count==0)
         {
            $community=Communities::where('title','LIKE','%'.$data.'%')->get()->first();
            if(Communities::where('title','LIKE','%'.$data.'%')->get()->count()!=0)
            {
                $rel=HomeCommunity::where('community_id',$community->id)->get()->first();
                if(HomeCommunity::where('community_id',$community->id)->get()->count()!=0)
                {
                     $home      = Homes::with('communities')->where('id',$rel->home_id)->get();
                     return view('user.homeDetail.index')->with('homes',$home);
                }
            }
            return "No Record Found";
         }
         else
         {
            $home=Homes::with('communities')->where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get();
            return view('user.homeDetail.index')->with('homes',$home);
         }

    }

    public function AllHome()
    {
        $home= Homes::with('communities')->get();
        return view('user.homeDetail.index')->with('homes',$home);
    }

    public function single(Request $request)
    {
        $id = $request['id'];
        $home= Homes::with('communities')->with('floor')->with('feature')->where('id',$request['id'])->get();
        return view('user.homeDetail.singlehome')->with('homes',$home);
    }
    public function singleMap(Request $request)
    {
        $id = $request['id'];
        $home= Homes::with('communities')->with('floor')->with('feature')->where('id',$request['id'])->get();
        return view('user.MapHome.neighbour')->with('homes',$home);
    }

    public function schedule(Request $request)
    {
        $this->validate($request,[
            'date'=>'required',
            'time'=>'required',
            'name'=>'required',
            'home_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'seen'   =>'required',
            ]);

        Enquiry::create([
            'date'=>$request['date'],
            'time'=>$request['time'],
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'seen'=>$request['seen'],
            'home_id'=>$request['home_id'],
            'message'=>$request['message'],
        ]);
        return "ankit";

    }

    public function UpdateEnquirySeen($id)
    {
        Enquiry::where('id',$id)->update([
            'seen'=>1,
        ]);
        return redirect()->route('enquiry_detail',$id);
    }
    public function signup(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'name'=>'required',
            'password' => ['required', 'string', 'min:8',],
            ]);

        User::create([
            'email'     =>  $request['email'],
            'name'      =>  $request['name'],
            'password' => Hash::make($request['password']),
            'type'      =>  'user',
        ]);
        return "success";
    }
    public function map(Request $request)
    {
        return Homes::get();

    }
    public function mapSingle($id)
    {
        return Homes::where('id',$id)->get()->first();

    }
    public function mapHomeView(Request $request)
    {
        $data='';
        $homes = Homes::all();
        foreach($homes as $home)
        {
            $data.='  <div id="home'.$home->id.'" class="card homebox1" style="width: 100%; height:24rem;" >
                        <img style="height:100%;" src="uploads/homes/'.$home->featured_image.'"/>
                        <a href="/map-neighbour/'.$home->id.'" type="button" class="btn btnss btn-outline-dark">DETAILS</a>
                        <button type="button" onclick="summary('.$home->id.')" class="btn btns btn-outline-dark">SUMMARY</button>
                    </div><br>';
        }
        return $data;
    }
    
    public function mapMarkerHome($lat,$lng)
    {
        $homes = Homes::where('lat',$lat)->where('lng',$lng)->get()->first();
        return $homes;
    }

    public function summary($id)
    {
        $data='';
        $home=Homes::where('id',$id)->with('communities')->get()->first();
        $data.='<div class="card">
                    <div class="card-body">
                    <img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRYk2PV9aG2lNWRynWfQJA2jfYCmLhjVaKsWz_Z5JP8hWHMrcnY&usqp=CAU"/>
                    <img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ30DsYM6amh92SYeBa_seFvKhfO6DX3ivP46i9280vcrU3I2gP&usqp=CAU"/>
                    <img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRcnRVqoK3RUHZ_pqI_Roop2dpEHVEIjMz9r080C5-VhfZOB0OG&usqp=CAU"/>
                    <br>
                    <div class="w3-center" style="text-align:center;">
                        <div class="w3-section">
                            <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                            <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                        </div><br>
                            <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
                            <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
                            <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
                        </div>
                    </div>
                </div><br>
                <div class="container" style= "text-align: center;">
                    <span><strong>DETAILS</strong></span><br><br><hr>
                    <span>'.$home->communities->communities->address.','.$home->communities->communities->state .','.$home->communities->communities->county .'</span><br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <span><b>PRICE</b></span><br><br>
                            <span>$330,990</span>
                        </div>
                        <div class="col-md-3">
                            <span><b>BEDS</b></span><br><br>
                            <span>'.$home->bedroom.'</span>
                        </div>
                        <div class="col-md-3">
                            <span><b>BATHS</b></span><br><br>
                            <span>'.$home->bathroom.'</span>
                        </div>
                        <div class="col-md-3">
                            <span><b>Garage</b></span><br><br>
                            <span>'.$home->garage.'</span>
                        </div>
                    </div><br><br>
                    <div class="container">
                        <span> 
                        '.$home->communities->communities->description .' 
                        </span>
                    </div>
                </div> ';
            return $data;
    }

}
