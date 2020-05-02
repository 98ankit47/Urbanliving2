<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Homes;
use App\Models\Floors;
use App\Models\Communities;
use App\Models\FloorComponent;
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
         $count=Homes::where('block','1')->where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get('title')->count();
         if($count==0)
         {
            $community=Communities::where('title','LIKE','%'.$data.'%')->get()->first();
            if(Communities::where('title','LIKE','%'.$data.'%')->get()->count()!=0)
            {
                $rel=HomeCommunity::where('community_id',$community->id)->get()->first();
                if(HomeCommunity::where('community_id',$community->id)->get()->count()!=0)
                {
                     $home      = Homes::where('block','1')->with('communities')->where('id',$rel->home_id)->get();
                     return view('user.homeDetail.index')->with('homes',$home);
                }
            }
            return "No Record Found";
         }
         else
         {
            $home=Homes::where('block','1')->with('communities')->where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get();
            return view('user.homeDetail.index')->with('homes',$home);
         }

    }

    public function AllHome()
    {
        $home= Homes::where('block','1')->with('communities')->get();
        return view('user.homeDetail.index')->with('homes',$home);
    }

    public function single(Request $request)
    {
        $id = $request['id'];
        $floors=Floors::where('home_id',$id)->get()->first();
        $floorComponent=FloorComponent::where('floor_id',$floors->id)->get();
        $home= Homes::with('communities')->with('floor')->with('feature')->where('id',$request['id'])->get();
        return view('user.homeDetail.singlehome')->with('homes',$home)->with('floorcomponents',$floorComponent);
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
        $homes = Homes::where('block','1')->get();
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
        $homes = Homes::where('block','1')->where('lat',$lat)->where('lng',$lng)->get()->first();
        return $homes;
    }

    public function summary($id)
    {
        $data='';
        $plus=1;
        $minus=-1;
        $home=Homes::where('id',$id)->with('communities')->get()->first();
        $floors=Floors::where('home_id',$id)->get();
        $floorID=array();
        foreach($floors as $floor)
        {
            array_push($floorID,$floor->id);
        }
        $data.='<div class="card">
                    <div class="card-body">';

                    foreach($floorID as $fid)
                    {
                        $components=FloorComponent::where('floor_id',$fid)->get();
                        foreach($components as $component)
                        {
                            $data.='<img class="mySlides" style="width:60%; height:300px; margin-left:20%;" src="/uploads/floorcomponent/'.$component->image.'"/>';
                        }
                    }
                    $data.=' <br><br> <div class="w3-center" style="text-align:center;">
                            <div class="w3-section">
                                <button class="w3-button w3-light-grey" onclick="plusDivs('.$plus.')">❮ Prev</button>
                                <button class="w3-button w3-light-grey" onclick="plusDivs('.$minus.')">Next ❯</button>
                            </div>';
                    foreach($floorID as $fid)
                    {
                        $components=FloorComponent::where('floor_id',$fid)->get();
                        foreach($components as $key=> $component)
                        { 
                            $key=$key+1;
                            $data.='
                                    <button class="w3-button demo" onclick="currentDiv('.$key.')">'.$key.'</button> ';
                            $key=$key-1;

                        }
                    }

                    $data.='</diV></div>
                        </div><br><div class="container" style= "text-align: center;">
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
