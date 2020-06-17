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
use App\Models\NewsLetter;
use App\Models\Enquiry;
use App\Models\ContactUs;
use App\Models\Favourite;
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

    public function HomeHouseList()
    {
        $count=Homes::where('block',1)->count();
        if($count>=3 and $count<6)
        {
            $num=3;
        }
        else if($count>=6 and $count<9)
        {
            $num=6;

        }
        else if($count>9)
        {
            $num=9;
        }
        else if($count<3)
        {
            $num=0;
        }
        $home=Homes::where('block',1)->take($num)->get();
        return $home;
    }

    public function HomeMapHouseList()
    {
        $home=Homes::where('block',1)->with('communities')->get();
        return $home;
    }


    public function HomeHouseListFilter(Request $request)
    {
        $type     = $request['type'];
        $address  = $request['address'];
        $bedroom  = $request['bedroom'];
        $bathroom = $request['bathroom'];
        $minprice = $request['minprice'];
        $maxprice = $request['maxprice'];
        $minarea  = $request['minarea'];
        $maxarea  = $request['maxarea'];
        
        if($address)
        { 

        }
        else
        {
            $address="aaaaaaa";
        }
        if($minprice and $maxprice)
        { 

        }
        else
        {
            $minprice=Homes::where('block',1)->min('price');
            $maxprice=Homes::where('block',1)->max('price');
        }
        if($minarea and $maxarea)
        { 
            
        }
        else
        {
            $minarea=Homes::where('block',1)->min('area');
            $maxarea=Homes::where('block',1)->max('area');
        }
        if($request['title'])
        {
            return Homes::where('title','like','%'.$request['title'].'%')->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
        }
        $home_id=[];
        $homes=[];
        $gallery=[];
        if((Communities::with('homes')->where('state','LIKE','%'.$address.'%')->orWhere('area',$address)->orWhere('county','LIKE','%'.$address.'%')->count())==0)
        {    
            if($bedroom and $bathroom and $type)
            {
                $homes=Homes::where('block',1)->where('bedroom',$bedroom)->where('bathroom',$bathroom)->where('type',$type)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else if($bedroom and $bathroom and $type='')
            {
                $homes=Homes::where('block',1)->where('bedroom',$bedroom)->where('bathroom',$bathroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else if($bedroom and $type and $bathroom='')
            {
                $homes=Homes::where('block',1)->where('bedroom',$bedroom)->where('type',$type)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else if($type and $bathroom and $bedroom='')
            {
                $homes=Homes::where('block',1)->where('type',$type)->where('bathroom',$bathroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else if($type)
            {
                $homes=Homes::where('block',1)->where('type',$type)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else if($bedroom)
            {
                $homes=Homes::where('block',1)->where('bedroom',$bedroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            } 
            else if($bathroom)
            {
                $homes=Homes::where('block',1)->where('bathroom',$bathroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else 
            {
                $homes=Homes::where('block',1)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get();
                foreach($homes as $house)
                {
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
        }
        else
        {
            $comm=Communities::with('homes')->where('state','LIKE','%'.$address.'%')->orWhere('area','LIKE','%'.$address.'%')
            ->orWhere('county','LIKE','%'.$address.'%')->get();
            foreach($comm as $community)
            {
                foreach($community->homes as $key=>$rel)
                {
                    $home_id[$key]=$rel->home_id;
                }
            }
            $i=0;
            foreach($home_id as $key=>$home)
            {
                
                if(Homes::where('id',$home)->where('block',1)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->count()!=0)
                {
                    if($bedroom and $bathroom and $type)
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('bedroom',$bedroom)->where('bathroom',$bathroom)->where('type',$type)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    }
                    else if($bedroom and $bathroom and $type='')
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('bedroom',$bedroom)->where('bathroom',$bathroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    }
                    else if($bedroom and $type and $bathroom='')
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('bedroom',$bedroom)->where('type',$type)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    }
                    else if($type and $bathroom and $bedroom='')
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('type',$type)->where('bathroom',$bathroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    }
                    else if($type and $bathroom='' and $bedroom='')
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('type',$type)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    }
                    else if($bedroom and $type='' and $bathroom='' )
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('bedroom',$bedroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    } 
                    else if($bathroom and $type='' and $bedroom='')
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('bathroom',$bathroom)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        $i++;
                    }
                    else 
                    {
                        $homes[$i]=Homes::where('id',$home)->where('block',1)->where('price','>=',$minprice)->where('price','<=',$maxprice)->where('area','>=',$minarea)->where('area','<=',$maxarea)->get()->first();
                        
                    }
                }
            }
            if($homes)
            {
                foreach($homes as $house)
                {
                    return $house;
                    $house->gallery=explode(',',$house->gallery);
                }
                return $homes;
            }
            else
            {
                return "no Record found";
            } 
           
        }
        $homesall=Homes::get();
        foreach($homesall as $house)
        {
            $house->gallery=explode(',',$house->gallery);
        }
        return $homesall;
    }

    public function HomeFilterData()
    {
        $data=[
            'maxbedroom'=>(int)Homes::where('block',1)->max('bedroom'),
            'maxbathroom'=>(int)Homes::where('block',1)->max('bathroom'),
            'minarea'=>Homes::where('block',1)->min('area'),
            'maxarea'=>Homes::where('block',1)->max('area'),
            'minprice'=>Homes::where('block',1)->min('price'),
            'maxprice'=>Homes::where('block',1)->max('price'),
        ];
        return $data;        
    }
    
    public function HomeNeighbour()
    {
        return communities::inRandomOrder()->take(4)->get();
    }

    public function NewsLetter(Request $request)
    {
        if(NewsLetter::where('email',$request['email'])->get()->count()==0)
        {
            if(User::where('email',$request['email'])->get()->count()==0)
            {
                NewsLetter::create([
                    "email"=>$request['email'],
                    ]);
            }
            else
            {
                $user=User::where('email',$request['email'])->get()->first();
                NewsLetter::create([
                    "email"=>$request['email'],
                    "name"=>$user->name,
                    ]);
            }
        }
        else
        {
            return ['email'=>"already exist"];
        }
        return "success";
    }

    public function AddFavourite($userid,$homeid)
    {
        $count=Favourite::where('home_id',$userid)->where('user_id',$homeid)->get()->count();
        $fav=Favourite::where('home_id',$userid)->where('user_id',$homeid)->get()->first();
        if($count==0)
        {
            Favourite::create([
        
                'home_id'=>$userid,
                'user_id'=>$homeid,
                'favourite'=>1,
    
            ]);
        }
        else
        {   
            if($fav->favourite==0)
            {
                Favourite::where('id',$fav->id)->update([
                    'favourite'=>1,
                ]);
            }
            else if($fav->favourite==1)
            {
                Favourite::where('id',$fav->id)->update([
                    'favourite'=>0,
                ]);   
            }
           
        }
    }

    public function ContactUs(Request $request)
    {
        if(User::where('email',$request['email'])->get()->count()==0)
        {
            ContactUs::create([
                "email"=>$request['email'],
                "message"=>$request['message']
                ]);
        }
        else
        {
            $user=User::where('email',$request['email'])->get()->first();
            ContactUs::create([
                "email"=>$request['email'],
                "message"=>$request['message'],
                "name"=>$user->name,
                ]);
        }
       
        return "success";
    }


    public function HomeMapHouseListFilter(Request $request)
    {
        $home_id=[];
        $homes=[];
        $address=$request['address'];
        if((Communities::with('homes')->where('state','LIKE','%'.$address.'%')->orWhere('area','LIKE','%'.$address.'%')->orWhere('county','LIKE','%'.$address.'%')->orWhere('zipcode','LIKE','%'.$address.'%')->count())==0||$request['address']=='')
        {

            if($request['type'] && $request['price'])
            {
                return Homes::where('block',1)->with('communities')->where('price','<=',$request['price'])->where('type',$request['type'])->get();
            }
            else if($request['type']=='' && $request['price'])
            {
                return Homes::where('block',1)->with('communities')->where('price','<',$request['price'])->get();
            }
            else if($request['price']=='' && $request['type'])
            {
                return Homes::where('block',1)->with('communities')->where('type',$request['type'])->get();
            }
            else
            {
                return Homes::where('block',1)->with('communities')->get();
            }
             
        }
        else
        {
            $comm=Communities::with('homes')->where('state','LIKE','%'.$address.'%')->orWhere('area','LIKE','%'.$address.'%')
            ->orWhere('county','LIKE','%'.$address.'%')->orWhere('zipcode','LIKE','%'.$address.'%')->get();
            foreach($comm as $community)
            {
                foreach($community->homes as $key=>$rel)
                {
                    $home_id[$key]=$rel->home_id;
                }
            }
            $i=0;
            foreach($home_id as $key=>$home)
            {
                if(Homes::where('id',$home)->where('block',1)->count()!=0)
                {
                    $homes[$i]=Homes::where('id',$home)->where('block',1)->with('communities')->get()->first();
                    $i++;
                }
            }
            return $homes;
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
                     $home = Homes::where('block','1')->with('communities')->where('id',$rel->home_id)->get();
                     foreach($home as $house)
                     {
                         $house->gallery=explode(',',$house->gallery);
                     }
                     return $home;
                }
            }
            return "No Record Found";
         }
         else
         {
            $homes=Homes::where('block','1')->with('communities')->orwhere('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get();
            foreach($homes as $house)
            {
                $house->gallery=explode(',',$house->gallery);
            }
            return $homes;
         }

    }

    public function searchMls(Request $request)
    {
        $home_id=[];
        $homes=[];
        $address=$request['search'];
        $comm=Communities::with('homes')->where('state','LIKE','%'.$address.'%')->orWhere('area','LIKE','%'.$address.'%')
        ->orWhere('county','LIKE','%'.$address.'%')->orWhere('zipcode','LIKE','%'.$address.'%')->get();
        foreach($comm as $community)
        {
            foreach($community->homes as $key=>$rel)
            {
                $home_id[$key]=$rel->home_id;
            }
        }
        $i=0;
        foreach($home_id as $k=>$home)
        {
            if(Homes::where('id',$home)->where('block',1)->count()!=0)
            {
                $homes[$i]=Homes::where('id',$home)->where('block',1)->get()->first();
                $i++;
            }
        }
        return $homes;
    }
    
    public function addfavShow($userid,$homeid)
    {
        $data='';
        $count=Favourite::where('home_id',$homeid)->where('user_id',$userid)->get()->count();
        $fav=Favourite::where('home_id',$homeid)->where('user_id',$userid)->get()->first();
        if($count==0)
        {
            $data.='<i style="color: grey;font-size:30px" class="fa fa-heart" aria-hidden="true"></i>';
        }
        else
        {   
            if($fav->favourite==1)
            { 
                $data.='<i style="color: red;font-size:30px" class="fa fa-heart" aria-hidden="true"></i>';
            }
            else{
                $data.='<i style="color: grey;font-size:30px" class="fa fa-heart" aria-hidden="true"></i>';
            }
        }
        return $data;

    }
    public function addFav($homeid,$userid)
    {
        $count=Favourite::where('home_id',$userid)->where('user_id',$homeid)->get()->count();
        $fav=Favourite::where('home_id',$userid)->where('user_id',$homeid)->get()->first();
        if($count==0)
        {
            Favourite::create([
        
                'home_id'=>$userid,
                'user_id'=>$homeid,
                'favourite'=>1,
    
            ]);
        }
        else
        {   
            if($fav->favourite==0)
            {
                Favourite::where('id',$fav->id)->update([
                    'favourite'=>1,
                ]);
            }
            else if($fav->favourite==1)
            {
                Favourite::where('id',$fav->id)->update([
                    'favourite'=>0,
                ]);   
            }
           
        }
       
    }

    public function AllHome()
    {
        $homes=Homes::all();
        return view('user.homeDetail.index')->with('homes',$homes);
    }


    public function SellingHome(Request $request)
    {
        $data=[];
        $featured_img =  time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads\selling\\').$featured_img);
       
        $gallery=$request['gallery'];
        $gallery_name=$request['gallery_name'];
        foreach($gallery as $key => $gal)
        {
            $gal_img =  time().explode('.',$gallery_name[$key])[0].'.' . explode('/', explode(':',substr($gal,0,strpos(
                $gal,';')))[1])[1];  
    
            \Image::make($gal)->save(public_path('uploads\sellinggal\\').$gal_img);
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
                "seen"=>0,
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
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'seen'=>0,
            'home_id'=>$request['home_id'],
            'message'=>$request['message'],
        ]);
        return "Success";

    }


    public function UpdateEnquirySeen($id)
    {
        Enquiry::where('id',$id)->update([
            'seen'=>1,
        ]);
        return redirect()->route('enquiry_detail',$id);
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
