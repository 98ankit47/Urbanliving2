<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
use App\Models\Logos;
use App\Models\Homes;
use App\Models\Communities;
use App\Models\Floors;
use App\Models\FloorComponent;
use App\Models\Enquiry;
use App\Models\Favourite;
use App\HomeAvailable;
use App\User;
use App\SellingHome;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function status()
    {
        return status::all();
    }

    public function featureData(Request $request)
    {
        return Features::where('id',$request['id'])->get()->first();
    }
    public function features(Request $request)
    {
        $data ='';
        $id=$request['id'];
        $features= Features::where('home_id',$id)->get();
        $data.='<div class="col-md-4"  >
        <a href="#" style="text-decoration:none" data-toggle="modal" onclick="addFeature()">
        <div class="card addcard" style="border:2px dotted #666666; background-color:#e4e4e4; height:345px;">
        <img class="card-img-top" style="height:120px;margin-top:20%;width:120px;margin-left:31%;" src="https://cdn3.iconfinder.com/data/icons/houses-11/64/131-Houses-Original_house-home-new-add-512.png">
        <div class="card-body"> <br>
            <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:darkgray"> ADD NEW FEATURE</h4>
        </div>
        </div>
        </a>
        </div>';
        foreach($features as $feature)
        {
            $data.='<div class="col-md-4" >
            <div class="card">
              <img class="card-img-top" height="200px"; src="/uploads/homeFeature/'.$feature->image.'" >
              <div class="card-body">
              <h5 style="font-size: 16px;text-align:center;">'.$feature->title.'</h5>
                 <br>
                 <div class="row">
                    <div class ="col-md-6" style="text-align:center;">
                        <button onclick="editfeature('.$feature->id.')" style="color:white;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn btn-info mr-1 mb-1 btn-block"><i class="la la-pencil-square"></i> Edit</button>  
                    </div>
                    <div class ="col-md-6" style="text-align:center;">
                        <button class="btn mr-1 mb-1 btn-block" data-id="'.$feature->id.'" data-toggle="modal" data-target="#deleteFeature" style="color:white;text-align:center;font-weight:bold; background-color:#F6454F;" ><i class="ft-x"></i> Delete</button>
                    </div>
                </div>   
              </div>
            </div>
          </div>';
            
        }
        return $data;        
    }

    public function logo()
    {
        $data ='';
        $logo= Logos::get()->first();
        $data.='<img src="/uploads/logo/'.$logo->image.'"  width="40px; style="border-radius:20px;">
                <span class="brand-text" style="font-weight:bold;font-size:23px;" >Urban Living</span>';     
        return $data;        
    }


    public function Dashboard()
    {
        $date = Carbon::now();
        $home=Homes::all();
        $communities=Communities::all();
        $floor=Floors::all();
        $sellenq=SellingHome::all();
        $sellenqToday=SellingHome::where('seen',0)->get()->count();
        $enq=Enquiry::where('seen',0)->get()->count();
        $notification = $sellenqToday + $enq;
        $user = User::whereDate('created_at',$date)->get()->count();
        return view('admin.dashboard')->with('homes',$home)->with('communities',$communities)
        ->with('floors',$floor)->with('sqs',$sellenq)->with('notification',$notification)->with('user',$user);
    }
    public function DashboardUser(Request $request)
    {
        $data ='';
        $users= User::where('type','user')->get();
        foreach($users as $key=>$user)
        {
            ++$key;
            $data.=' 
            <tr class="pull-up">
            <td class="text-truncate">'.$key.'</td>
            <td class="text-truncate p-1">'.$user->name.'</td>
            <td>'.$user->email.'</td>
            <td class="text-truncate">';
            if($user->status==0)
                        {
                           $data.='<div class="container" style="text-align:center;">
                           <a onclick="BlockUserModal('.$user->id.')" class="change_user_status" type="button" style="color:white;text-align:center;font-weight:bold; color:#F6454F;" data-id="'.$user->id.'"  ><i class="la la-ban">&nbsp;Deactive</i></a></div> ';
                        }
                       else
                       {
                           $data.='<div class="container" style="text-align:center;">
                           <a class="change_user_status" type="button" style="color:white;text-align:center;font-weight:bold; color:#2DCC70;" onclick="BlockUserModal('.$user->id.')" >
                           <i class="la la-check">&nbsp;Active</i></a></div>';
                       }
                       $data.='</td>
                       </tr>';
                     --$key;     
        }
        return $data;        
    }
    public function addLogo(Request $request)
    {
            $name =  time().explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
                $request['image'],';')))[1])[1];  
    
            \Image::make($request['image'])->save(public_path('uploads\logo\\').$name);

        Logos::where('id',1)->update([
             'image'=>$name
        ]);
    }
    public function updateGallery(Request $request ,$id)
    {
        $home =  Homes::where('id',$id)->first();
        $data = explode(',', $home->gallery);
        $gallery=$request['gallery'];
        $gallery_name=$request['gallery_name'];
        foreach($gallery as $key => $gal)
        {
            $gal_img =  time().explode('.',$gallery_name[$key])[0].'.' . explode('/', explode(':',substr($gal,0,strpos(
                $gal,';')))[1])[1];  
    
            \Image::make($gal)->save(public_path('uploads\gallery\\').$gal_img);
            array_push($data,$gal_img);
        }
        Homes::where('id',$id)->update([
            'gallery'=>implode(',', $data),
        ]);
        return $data;

    }

    
    public function showGallery(Request $request ,$id)
    {
        $data ='';
        $gallery =[];
        $homes= Homes::where('id',$id)->get()->first();
        $gallery=explode(',', $homes->gallery);
        $data.='<div class="col-md-4"><br>
        <a href="#" style="text-decoration:none" data-toggle="modal" data-target="#galleryModal" onclick="updategal()">
        <div class="card addcard" style="border:2px dotted #666666; background-color:#e4e4e4; height:250px;">
        <img class="card-img-top" style="height:120px;margin-top:20%;width:120px;margin-left:31%;" src="https://cdn3.iconfinder.com/data/icons/houses-11/64/131-Houses-Original_house-home-new-add-512.png">
        <div class="card-body">
            <h4 style="text-align:center;margin-top:15px;font-weight:bold;color:darkgray"> ADD NEW IMAGE</h4>
        </div>
        </div>
        </a>
        </div>';
        foreach($gallery as $key=> $gal)
        {
            $data.='<div class="col-md-4" ><br>
            <div class="card gall-card">
            <div class="container-gall">
              <img class="card-img-top image" style="height:250px;" src="/uploads/gallery/'.$gal.'">
              <div class="overlay">
                <a type="button" class="icon" data-id="'.$key.'"  data-toggle="modal" data-target="#deleteGallery">
                    <i class="la la-trash" style="font-size:60px;"></i>
                </a>
              </div>
            </div>
            </div> 
          </div>';
        }
        return $data; 
    }
    public function deleteGallery($home_id,$id)
    {
        $homes = Homes::where('id',$home_id)->get()->first();
        $data = explode(',', $homes->gallery);
        unset($data[$id]);
        Homes::where('id',$home_id)->update([
            'gallery'=>implode(',', $data),    
                ]);
    }


    public function sellingEnquiry()
    {
        $data ='';
        $display;
        $enquiries= SellingHome::orderBy('created_at','desc')->get();
        $date = Carbon::now();

        foreach($enquiries as $key=> $enquiry)
        {
            $minute=$date->diffInMinutes($enquiry->created_at);
            $days=$date->diffInDays($enquiry->created_at);
            $hours=$date->diffInHours($enquiry->created_at);
            $month=$date->diffInMonths($enquiry->created_at);
            if($minute<60)
            {
                $display=$minute.' minute ago';
            }
            else if($minute>59 && $hours<24)
            {
                $display=$hours.' hours ago';
            }
            else if($minute>59 && $hours>23)
            {
                $display=$days.' days ago';
            }
            else if($days>30)
            {
                $display=$months.' days ago';
            }
            $home= homes::where('id',$enquiry->home_id)->get()->first();
            
            if(($enquiry->seen)==0)
            {
                $color="C1C1C1";
            }
            else
            {
                $color="FFFFFF";
            }
                $data.='<div style="width:100%;">
                <div class="card" >
                    <div class="card-header" id="headingOne" style="background-color:#'.$color.';">
                        <div class="row" >
                            <div class="col-md-12" >
                                <strong style="text-decoration:none;color:black">There is selling Request from <span style="color:#00909e;">'.$enquiry->name.'('.$enquiry->email.')</span></strong>
                            </div>
                        </div>
                        <br>
                        <div class="container activity">
                            <div class="row">
                                <div class="col-md-4" style="text-align:right;">
                                    <i class ="fa fa-clock" style="font-size:15px; color:#e43f5a;"> '.$enquiry->created_at.' </i>
                                </div> 
                                <div class="col-md-4" style="text-align:right;">
                                    <i class ="fa fa-clock" style="font-size:15px; color:#e43f5a;"> '.$display.' </i>
                                </div>  
                                <div class="col-md-4" style="text-align:right;">
                                    <span><a href="selling/'.$enquiry->id.'" onclick="SeenSellingUpdate('.$enquiry->id.')"><b>Click here to view message</b></a></span>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
              </div>';
             

            }
        return $data; 
    }

    public function sellingEnquiryUpdate($id) 
    {
        SellingHome::where('id',$id)->update([
            "seen"=>1
        ]);
    }

    public function UpdateEnquirySeen($id)
    {
         Enquiry::where('id',$id)->update([
            "seen"=>1
        ]);
    }
    
    public function ShowSell($id)
    {
        $SellHome=SellingHome::where('id',$id)->get()->first();
        return view('admin.selling.selling')->with('selling',$SellHome);
    }
    

    public function enquiry()
    {
        $data ='';
        $display;
        $enquiries= Enquiry::orderBy('created_at','desc')->get();
        $date = Carbon::now();

        foreach($enquiries as $key=> $enquiry)
        {
            $minute=$date->diffInMinutes($enquiry->created_at);
            $days=$date->diffInDays($enquiry->created_at);
            $hours=$date->diffInHours($enquiry->created_at);
            $month=$date->diffInMonths($enquiry->created_at);
            if($minute<60)
            {
                $display=$minute.' minute ago';
            }
            else if($minute>59 && $hours<24)
            {
                $display=$hours.' hours ago';
            }
            else if($hours>23 && $days<30)
            {
                $display=$days.' days ago';
            }
            else if($days>30)
            {
                $display=$month.' month ago';
            }
            $home= homes::where('id',$enquiry->home_id)->get()->first();
            if($enquiry->seen==0)
            {
                
                $color="C1C1C1";
            }
            else
            {
                
                $color="FFFFFF";
            }
                $data.='<div class="accordion" id="accordionExample" >
                <div class="card"  >
                  <div class="card-header" id="headingOne" style="background:#'.$color.'" >
                    <div class="row" >
                        <div class="col-md-12" style="height:28px;" >
                            <strong style="text-decoration:none;color:black">Message from <span style="color:#00909e;">'.$enquiry->name.'('.$enquiry->email.')</span>
                            for Visting '.$home->title.'<span style="color:#00909e;"></span> 
                            on <b style="color:#00909e;">'.$enquiry->date.'</b> at <b style="color:#00909e;">'.$enquiry->time.'</b>. </strong>
                        </div>
                    </div>
                    <div class="row showbtn" style="text-align:center;">
                    <div class="col-md-4" style="color:red;font-weight:bold">'.date($enquiry->created_at).'</div>
                    <div class="col-md-4" style="color:red;font-weight:bold">'.$display.'</div>
                        <div class="col-md-4">
                            <button class="btn btn-link" onclick="enqUpdate('.$enquiry->id.')"  type="button" data-toggle="collapse" data-target="#collapse'.$enquiry->id.'" aria-expanded="true" aria-controls="collapseOne">
                            Click here to see message
                            </button>
                        </div>
                    </div>
                  </div>
                  <div id="collapse'.$enquiry->id.'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="messages">
                            <table>
                                <tr style="color:black;">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    <th>Enquired Home Name</th>
                                </tr>
                                <tr style="color:black;">
                                    <td>'.$enquiry->name.'</td>
                                    <td>'.$enquiry->email.'</td>
                                    <td>'.$enquiry->phone.'</td>
                                    <td>'.$home->title.'</td>
                                </tr>
                            </table><br>
                            <span><b>MESSAGE :</b></span><br>
                            <p style="margin-left:100px;margin-right:100px;font-size:16px;">
                             '.$enquiry->message.'
                            <p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" data-toggle="modal" data-id="" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold;" data-target=" class="btn btn-primary"><i class="la la-reply"></i> Reply</button> 
                                </div>
                                <div class="col-md-6">
                                    <button type="button" data-id="'.$enquiry->id.'" data-toggle="modal" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" data-target="#deleteEnquiry" class="btn"><i class="ft-x"></i> Delete</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>';
             
        }
        return $data;
    }

    public function DeleteFav($id)
    {
        $favourite = Favourite::findOrFail($id);
        $favourite->delete(); 
    }
    public function UserFavourite($id) 
    {
        $favourite = Favourite::where('user_id',$id)->Where('favourite',1)->get();
        $data='';
        foreach($favourite as $key=> $fav)
        {
            $home=Homes::where('id',$fav->Home_id)->get()->first();
            $data.='<div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" style="height:200px;" src="/uploads/homes/'.$home->featured_image.'">
                            <div class="card-body">
                                <h6 style="text-align:center">'.$home->title.'</h6>
                                <button style="color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;"
                                 class="btn" data-id="'.$fav->id.'" data-toggle="modal"  data-target="#deleteFav">Remove From Favorite</button>
                            </div>
                        </div>
                    </div>';
        }
        return $data;
    }
    public function Userscheduleshow($id)
    {
        $user=User::where('id',$id)->get()->first();
        $enquiry = SellingHome::where('email',$user->email)->get();
        $data='';
        foreach($enquiry as $key=> $enq)
        {
            $data.='<div class="col-md-4">
                        <div class="card" style="">
                            <img class="card-img-top" style="height:120px;" src="/uploads/selling/'.$enq->featured_image.'">
                                <div class="card-body">
                                <button style="color:white;width:100%;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn">VIEW DETAIL</button>
                            </div>
                        </div>
                    </div>';
        }
        return $data;
    }

    public function Usertour($id)
    {
        $user=User::where('id',$id)->get()->first();
        $enquiry = Enquiry::where('email',$user->email)->get();
        $data='';
        foreach($enquiry as $key=> $enq)
        {
            $home=Homes::where('id',$enq->home_id)->get()->first();
            $data.=' <div class="col-md-12" style="height:28px;">
                        <span>Tour Schedule For '.$home->title.' on '.date($home->created_at).' to visit on '.$enq->date.'</span>
                    </div>';
        }
        return $data;
    }

    public function enquiryDelete($id)
    {
        $enquiry = Enquiry::findOrFail($id);
                $enquiry->delete(); 
    }

    public function getFloor($hid,$fno)
    {
        $floor=Floors::where('home_id',$hid)->where('floor_no',$fno)->get()->count();
        return $floor;
    }


    public function userFloor($id)
    {
        $data ='';
        $floor= Floors::where('id',$id)->get()->first();
        $bedroom    =   "bedroom";
        $bathroom   =   "bathroom";
        $garage     =   "garage";
        $dining     =   "dining";
        $kitchen    =   "kitchen";
        $data.=' 
                <h4>FLOOR PLANS '.$floor->floor_no.'</h4>
                <div class="row">
                <div class="col-md-5">
                    <span>Bedrooms</span>
                </div>
                <div class="col-md-7">';
                 for($i = 1;$i<=($floor->bedroom);$i++)
                {
                    $data.='<a type="button" onClick="userFloorComponent(\''. $bedroom . '\','.$floor->id.','.$i.')" class="btn btn-primary">'.$i.' </a>&nbsp';    
                }
                $data.='</div>
                </div>  <br>
                <div class="row">
                    <div class="col-md-5">
                        <span>Bathroom</span>
                    </div>
                    <div class="col-md-7">';
                    for($i = 1;$i<=($floor->bathroom);$i++)
                    {
                        $data.='<a type="button" onClick="userFloorComponent(\''. $bathroom . '\','.$floor->id.','.$i.')" class="btn btn-primary">'.$i.' </a>&nbsp';    
                    }
                    $data.='</div>
                    </div>  <br>
                    <div class="row">
                    <div class="col-md-5">
                        <span>Kitchens</span>
                    </div>
                    <div class="col-md-7">';
                    for($i = 1;$i<=($floor->kitchen);$i++)
                    {
                        $data.='<a type="button" onClick="userFloorComponent(\''. $kitchen. '\','.$floor->id.','.$i.')" class="btn btn-primary">'.$i.' </a>&nbsp';    
                    }
                    $data.='</div>
                    </div>  <br>
                    <div class="row">
                        <div class="col-md-5">
                        <span>Garage</span>
                    </div>
                    <div class="col-md-7">';
                    for($i = 1;$i<=($floor->garage);$i++)
                    {
                        $data.='<a type="button" onClick="userFloorComponent(\''. $garage . '\','.$floor->id.','.$i.')" class="btn btn-primary">'.$i.' </a>&nbsp';    
                    }   
                    $data.='</div>
                    </div> <br>
                    <div class="row">
                        <div class="col-md-5">
6                        <span>Dining</span>
                    </div>
                    <div class="col-md-7">';
                    for($i = 1;$i<=($floor->dining);$i++)
                    {
                        $data.='<a type="button" onClick="userFloorComponent(\''. $dining . '\','.$floor->id.','.$i.')" class="btn btn-primary">'.$i.' </a>&nbsp';    
                    }   
                    $data.='</div>
                </div> 
                ';
        
        return $data; 
    }

    public function notification()
    {
        $enquiry=Enquiry::where('seen',0)->get()->count();
        if($enquiry==0)
        {
            return '';
        }
        else
        {
            return $enquiry;
        } 
    }

    public function LoadNotification()
    {
        $enquiry=Enquiry::where('seen',0)->get()->count();
        $enquiry2=SellingHome::where('seen',0)->get()->count();
        $total=$enquiry+$enquiry2;
        if($enquiry==0)
        {
            return '';
        }
        else
        {
            return $total;
        } 
    }

    public function Sellnotification()
    {
        $enquiry=SellingHome::where('seen',0)->get()->count();
        if($enquiry==0)
        {
            return '';
        }
        else
        {
            return $enquiry;
        } 
    }

    public function userFloorComponent($type,$floor_id,$component_id)
    {
        $data='';
        $com=FloorComponent::where('type',$type)->where('floor_id',$floor_id)->where('component_no',$component_id)->get()->first();
        $data='<img src="/uploads/floorcomponent/'.$com->image.'" style="height:22rem; width:18rem;">';
        return $data;
    }

    

    public function AvailableShow($id)
    {
        $data ='';
        $avbs= HomeAvailable::where('home_id',$id)->get();
        $data.='<div class="col-md-4"  >
        <a href="#" style="text-decoration:none" data-toggle="modal"  onclick="loadmap()"  data-target="#AddcommunityModal">
        <div class="card addcard" style="border:2px dotted #666666; background-color:#e4e4e4; height:327px;">
        <img class="card-img-top" style="height:120px;margin-top:20%;width:120px;margin-left:31%;" src="https://cdn3.iconfinder.com/data/icons/houses-11/64/131-Houses-Original_house-home-new-add-512.png">
        <div class="card-body"> <br>
            <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:darkgray"> ADD NEW LOCATION</h4>
        </div>
        </div>
        </a>
        </div>';
        foreach($avbs as $key=> $avb)
        {
            $home=Homes::where('id',$avb->home_id)->get()->first();
            $data.='<div class="col-md-4" >
            <div class="card">
              <img class="card-img-top" style="height:200px;" src="/uploads/homes/'.$home->featured_image.'">
                <div class="card-body">
                <div class="wrapper">
                <h5>Lat='.$avb->lat.' $$ Lng='.$avb->lng.'</h5>

                <div class="row">
                
                <div class ="col-md-6">
                <a onclick="Editloadmap('.$avb->id.')" style="color:white;text-align:center;font-weight:bold;" class="btn btn-block btn-info"><i class="la la-pencil-square"></i> Edit</a> 
                </div>
                
                <div class ="col-md-6">
                <button style="color:white;text-align:center;
                font-weight:bold; background-color:#F6454F;" data-id="'.$avb->id.'" data-toggle="modal" data-target="#deleteAvail" class="btn btn-block"><i class="ft-x"></i> Delete</button>  
               </div>
               </div>
                </div>
                </div>
                </div>
            </div> 
          </div>';
        }
        return $data; 
    }

    public function CheckFloor($id,$type)
    {
        $floor= Floors::where('id',$id)->get()->first();
        $floorComponent= FloorComponent::where('floor_id',$id)->where('type',$type)->get()->count();
        $fl=$floor->$type;
        return $floorComponent;
        if($floorComponent==$fl)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }


    public function AvailableSingleHome($id)
    {
        return HomeAvailable::where('home_id',$id)->get();
    }
    public function DeleteAvail($id)
    {
        $home = HomeAvailable::findOrFail($id);
        $home->delete(); 
    }

    public function UserBlock($id)
    { 
        $home = User::where('id',$id)->get()->first();
        if($home->status==0)
        {
            $block=1;
        }
        else
        {
            $block=0;
        }
        User::where('id',$id)->update([
            'status'=>$block
        ]);
        return "success";
    }
}
