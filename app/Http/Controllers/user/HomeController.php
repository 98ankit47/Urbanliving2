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
use App\SellingHome;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private $loginuser;

    public function __construct() {
        if(Auth::check())
        {
            $this->loginuser = Auth::user();
        }
    }

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

    public function SellingHome(Request $request)
    {
        $data=[];
        $featured_img =  time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads\homes\\').$featured_img);
       
        $gallery=$request['gallery'];
        $gallery_name=$request['gallery_name'];
        foreach($gallery as $key => $gal)
        {
            $gal_img =  time().explode('.',$gallery_name[$key])[0].'.' . explode('/', explode(':',substr($gal,0,strpos(
                $gal,';')))[1])[1];  
    
            \Image::make($gal)->save(public_path('uploads\gallery\\').$gal_img);
            array_push($data,$gal_img);
        }

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'bathroom'=>'required',
            'bedroom'=>'required',
            'price'   =>'required',
            'city'   =>'required',
            'state'   =>'required',
            'zip'   =>'required',
            'square'   =>'required',
            'type'   =>'required',
            'time'   =>'required',
            ]);
            
            SellingHome::create([
                "name"=>$request['name'],
                "email"=>$request['email'],
                "address"=>$request['address'],
                "city"=>$request['city'],
                "state"=>$request['state'],
                "zip"=>$request['zip'],
                "bedroom"=>$request['bedroom'],
                "bathroom"=>$request['bathroom'],
                "squareft"=>$request['square'],
                "bathroom"=>$request['bathroom'],
                "price"=>$request['price'],
                "type"=>$request['type'],
                "time"=>$request['time'],
                "featured_image"=>$featured_img,
                "gallery"=>implode(',', $data),
            ]);
        return "Success";
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
            'home_id'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'seen'   =>'required',
            ]);

        Enquiry::create([
            'date'=>$request['date'],
            'time'=>$request['time'],
            'name'=>"Jashan",
            'email'=>"Jashan@gmail.com",
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
            'status'    =>  1,
        ]);
        return "success";
    }
    public function map(Request $request)
    {
        return Homes::where('block','1')->get();

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
                    <div class="card-body" style="height:440px;">';

                    foreach($floorID as $fid)
                    {
                        $components=FloorComponent::where('floor_id',$fid)->get();
                        foreach($components as $component)
                        {
                            $data.='<img class="mySlides" style="width:100%; height:400px;" src="/uploads/floorcomponent/'.$component->image.'"/>';
                        }
                    }
                    $data.=' <br><br> <div class="w3-center" style="text-align:center;">
                            <div class="w3-section">
                                <a class="w3-button7" style="color:white;font-size:24px;" onclick="plusDivs('.$plus.')"> ❮ </a>
                                <a class="w3-button8" style="color:white;font-size:24px;" onclick="plusDivs('.$minus.')"> ❯ </a>
                            </div>';
                    // foreach($floorID as $fid)
                    // {
                    //     $components=FloorComponent::where('floor_id',$fid)->get();
                    //     foreach($components as $key=> $component)
                    //     { 
                    //         $key=$key+1;
                    //         $data.='
                    //                 <button class="w3-button demo" onclick="currentDiv('.$key.')">'.$key.'</button> ';
                    //         $key=$key-1;

                    //     }
                    // }

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
