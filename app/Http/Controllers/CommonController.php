<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
use App\Models\Logos;
use App\Models\Homes;
use App\Models\Floors;
use App\Models\FloorComponent;
use App\Models\Enquiry;
use App\HomeAvailable;
use App\User;
Use \Carbon\Carbon;
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
        <a style="text-decoration:none" data-toggle="modal" onclick="addFeature()">
            <div class="card addcard" style="border-radius:40px;border:2px black groove;">
                <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:black"> ADD NEW FEATURE</h4>
            <img class="card-img-top" style="height:220px;" src="https://img.icons8.com/cotton/2x/add.png">
            <div class="card-body"> 
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
                        <button onclick="editfeature('.$feature->id.')" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Edit</button>  
                    </div>
                    <div class ="col-md-6" style="text-align:center;">
                        <button class="btn" data-id="'.$feature->id.'" data-toggle="modal" data-target="#deleteFeature" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" >Delete</button>
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
        $data.='<img src="/uploads/logo/'.$logo->image.'"  class="brand-image img-circle elevation-3"
                style="opacity: .8">
                <span class="brand-text font-weight-light">Urban Living</span>';     
        return $data;        
    }


    public function DashboardUser(Request $request)
    {
        $data ='';
        $users= User::where('type','user')->get();
        foreach($users as $key=>$user)
        {
            ++$key;
            $data.=' <tr>
                        <td>'.$key.'</td>
                        <td>'.$user->name.'</td>
                        <td>'.$user->email.'</td>
                        <td>';
                        if($user->status==0)
                        {
                           $data.='<div class="container" style="text-align:center;">
                           <a onclick="BlockUserModal('.$user->id.')" class="change_user_status" type="button" style="color:white;text-align:center;font-weight:bold; color:#F6454F;" data-id="'.$user->id.'"  ><i class="fa fa-ban">&nbsp;Deactive</i></a></div> ';
                        }
                       else
                       {
                           $data.='<div class="container" style="text-align:center;">
                           <a class="change_user_status" type="button" style="color:white;text-align:center;font-weight:bold; color:#2DCC70;" onclick="BlockUserModal('.$user->id.')" >
                           <i class="fa fa-check">&nbsp;Active</i></a></div>';
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
    public function showGallery(Request $request ,$id)
    {
        $data ='';
        $gallery =[];
        $homes= Homes::where('id',$id)->get()->first();
        $gallery=explode(',', $homes->gallery);
        $data.='<div class="col-md-4"  >
        <a style="text-decoration:none" data-toggle="modal" >
            <div class="card addcard" style="border-radius:40px;border:2px black groove;">
                <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:black">ADD NEW GALLERY IMAGE</h4>
            <img class="card-img-top" style="height:170px;" src="https://img.icons8.com/cotton/2x/add.png">
            <div class="card-body"> 
            </div>
            </div>
        </a>
        </div>';
        foreach($gallery as $key=> $gal)
        {
            $data.='<div class="col-md-4" >
            <div class="card">
              <img class="card-img-top" style="height:200px;" src="/uploads/gallery/'.$gal.'">
                <div class="card-body">
                <div class="wrapper">
                    <button class="btn w-100" type="button" data-id="'.$key.'"  data-toggle="modal" data-target="#deleteGallery" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" >Delete</button>
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
            $home= homes::where('id',$enquiry->home_id)->get()->first();
            if(($enquiry->seen)==0)
            {
                $color="C1C1C1";
            }
            else
            {
                $color="FFFFFF";
            }
                $data.='<div id="accordion" >
                <div class="card" style="background-color:#'.$color.';">
                  <div class="card-header" >
                      <button class="btn btn-link" onclick="enqUpdate('.$enquiry->id.')" data-toggle="collapse" data-target="#enq'.$enquiry->id.'" aria-expanded="true" aria-controls="collapseOne">
                        <div class="row" >
                            <div class="col-md-12" >
                                <strong style="text-decoration:none;color:black">Message from <i style="color:red;">'.$enquiry->name.'('.$enquiry->email.')</i>
                                for Visting home <i style="color:red;">'.$home->title.'</i> 
                                on <b style="color:red;">'.$enquiry->date.'</b> at <b style="color:red;">'.$enquiry->time.'</b>. </strong>
                            </div>
                        </div><hr>
                        <div class="container activity">
                            <div class="row">
                                <div class="col-md-6" style="text-align:center;">
                                    <i class ="fa fa-clock" style="font-size:15px; color:#DC143C;"> '.$enquiry->created_at->format('d M Y').' </i>
                                </div>
                                
                                <div class="col-md-6" style="text-align:center;">
                                    <i class ="fa fa-clock" style="font-size:15px; color:#DC143C;">'.$display.' </i>
                                </div>
                                
                            </div>
                            </div>
                      </button>
                  </div>
              
                  <div id="enq'.$enquiry->id.'" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="border border-dark">
                            <h4 style="text-align:center;font-weight:bold">Message<h4><hr>
                            <p style="margin-left:100px;margin-right:100px;font-size:16px;">
                            '.$enquiry->message.'
                            <p>
                            <hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <button type="button" data-toggle="modal" data-id="" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#60ACEF;" data-target="#deleteFloor" class="btn">Reply</button> 
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <button type="button" data-toggle="modal" data-id="'.$enquiry->id.'" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" data-target="#deleteEnquiry" class="btn">Delete</button> 
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

    public function enquiryDelete($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete(); 
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
                        <span>Dining</span>
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

    public function userFloorComponent($type,$floor_id,$component_id)
    {
        $data='';
        $com=FloorComponent::where('type',$type)->where('floor_id',$floor_id)->where('component_no',$component_id)->get()->first();
        $data='<img src="/uploads/floorcomponent/'.$com->image.'" style="height:15rem; width:18rem;">';
        return $data;
    }

    public function changepass(Request $request)
    {    
        $user = User::where('type','admin')->get()->first();
        $oldpass=$request['current'];
        if(Hash::check($oldpass, $user->password))
        {
            User::where('type','admin')->update([
                'password'=>Hash::make($request['newpass'])
            ]);
            
        }
        else
        {
            return ["danger" => "Your current Password is not correct" ];
        }
        
    }

    public function AvailableShow($id)
    {
        $data ='';
        $avbs= HomeAvailable::where('home_id',$id)->get();
        $data.='<div class="col-md-4"  >
        <a style="text-decoration:none" data-toggle="modal"  onclick="loadmap()"  data-target="#AddcommunityModal">
            <div class="card addcard" style="border-radius:40px;border:2px black groove;">
                <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:black"> ADD LOCATION</h4>
            <img class="card-img-top" style="height:220px;" src="https://img.icons8.com/cotton/2x/add.png"">
            <div class="card-body"> 
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
                <div class="col-md-1"></div>
                <div class ="col-md-4">
                <a onclick="Editloadmap('.$avb->id.')" style="color:white;width:100px;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn w-100">Edit</a> 
                </div>
                <div class="col-md-2"></div>
                <div class ="col-md-4">
                <button style="color:white;width:100px;text-align:center;
                font-weight:bold; background-color:#F6454F;" data-id="'.$avb->id.'" data-toggle="modal" data-target="#deleteAvail" class="btn w-100">Delete</button>  
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
