<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
use App\Models\Logos;
use App\Models\Homes;
use App\Models\Floors;
use App\Models\FloorComponent;
use App\Models\Enquiry;
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
        foreach($features as $feature)
        {
            $data.=' <div class="card" style="text-align: center;">
                    <div class="row" style=" margin-top:10px; margin-bottom:10px;">
                        <div class="col-md-4">
                        <img class="card-img-top" style="height:150px; width:290px;" src="/uploads/homeFeature/'.$feature->image.'">
                        </div> 
                        <div class="col-md-4">
                        <p class="title" style="font-size: 20px; margin-top:50px;">'.$feature->title.'</p>
                        </div>
                        <div class="col-md-4">
                        <div class="wrapper" style="margin-top:50px;">
                        <button onclick="editfeature('.$feature->id.')" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Edit</button>  
                        
                        <button class="btn" data-id="'.$feature->id.'" data-toggle="modal" data-target="#deleteFeature" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" >Delete</button>
                        </div>
                        </div>
                        </div>
                    </div>  <br><br> ';
            
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
                        <td>
                        <select id="community_list" class="form-control">
                            <option>Active</option>
                            <option>Deactive</option>
                        </select>
                        </td>
                        <td>
                        <span><a class="a1 click_edit" title="Edit" href="#">
                            <i class="fa fa-edit"></i></a></span>&nbsp;&nbsp;
                        <span><a href="#" class="a1" data-toggle="modal" data-target="#modal-delete" ><i class="fa fa-trash"></i></a></span>
                        </td>
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
        foreach($gallery as $key=> $gal)
        {
            $data.='<div class="col-md-4" >
            <div class="card">
              <img class="card-img-top" style="height:200px;" src="/uploads/gallery/'.$gal.'">
                <div class="card-body">
                <button class="btn w-100" onclick="deleteGallery('.$key.','.$homes->id.')" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" >Delete</button>
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
                $data.='<a class="tablink" style="text-decoration:none;background:#CCCCCC" type="button" href="/admin/enquiry/update/'.$enquiry->id.'">
                    <div class="row">
                    <div class="column" style="width:98%;font-family: Open Sans, sans-serif;">
                        <strong>Message from <u style="color:red">'.$enquiry->name.'</u> for Visting home <u style="color:red">'.$home->title.'</u> </strong>
                    </div>
                    <div class="column" style="width:2%; padding-top: 20px;">
                        <i class ="fa fa-angle-right" style="font-size:25px; color:gray;"></i>
                    </div>
                    <i class ="fa fa-clock" style="font-size:15px; color:#DC143C; margin-left: 85%;">'.$display.' </i>
                    </div><hr>
                    <div class="container activity">
                    <i class ="fa fa-clock" style="font-size:15px; color:#DC143C; margin-left: 35%;"> '.$enquiry->created_at->format('d M Y').' </i>
                    <i class ="fa fa-eye" style="font-size:15px; color:#DC143C; padding-left: 10%;"> Mark as read </i>
                </div>
                </a>';
            }
            else
            {
                $data.='<a class="tablink" style="text-decoration:none" type="button" href="/admin/enquiry/update/'.$enquiry->id.'">
                <div class="row">
                <div class="column" style="width:98%;font-family: Open Sans, sans-serif;">
                    <strong>Message from <u style="color:#1e559e;">'.$enquiry->name.'</u> for Visting home <u style="color:#1e559e;">'.$home->title.'</u> </strong>
                </div>
                <div class="column" style="width:2%; padding-top: 20px;">
                    <i class ="fa fa-angle-right" style="font-size:25px; color:gray;"></i>
                </div>
                <i class ="fa fa-clock" style="font-size:15px; color:#DC143C; margin-left: 85%;">'.$display.' </i>
                </div><hr>
                <div class="container activity">
                    <i class ="fa fa-clock" style="font-size:15px; color:#DC143C; margin-left: 35%;"> '.$enquiry->created_at->format('d M Y').' </i>
                    <i class ="fa fa-eye" style="font-size:15px; color:#DC143C; padding-left: 10%;"> Mark as read </i>
                </div>
            </a>';
            }
        }
        return $data; 
    }

    public function enquiryDetail($id)
    {
        $data ='';
        $enquiries= Enquiry::where('id',$id)->get()->first();
        $home= homes::where('id',$enquiries->home_id)->get()->first();
        $data.='
        <div style="border:2px solid #ff6b56;background-color:white;text-align: center;font-family: Open Sans, sans-serif;width:60%" >
        <h2 style=" background-color:#ff6b56;color: White;font-weight:bold">Requset For tour</h2>
        <div class="container" style="background-color: white;text-align: center;font-family: Open Sans, sans-serif;"><br>
            
        <span>Enquiry For &nbsp;:&nbsp;&nbsp;<span style="color: #71aea5; font-size:20px;"><strong>'.$home->title.'</span></strong></span><br>
        <span style="color: gray;font-size: 13px;">'.$enquiries->time.'</span>&nbsp;<span style="color: gray;"> | </span>&nbsp;<span style="color: gray;font-size: 13px;"> '.$enquiries->date.' </span>
        <br><br>
        <span>From &nbsp;:&nbsp;<span style="color: #71aea5; font-size:20px;"> <strong>'.$enquiries->name.'</span></strong></span><br>
        <span style="color: gray; font-size: 13px;"> '.$enquiries->email.' </span>&nbsp;<span style="color: gray;"> | </span>&nbsp;<span style="color: gray;font-size: 13px;"> '.$enquiries->phone.' </span><br><br><br>
        <span>'.$enquiries->message.'</span>
       <br><br><br>
        <button style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#ff6b56;" class="btn w3-100">Reply</button>
        <br><br>
        
    </div>
    </div>';
        
        return $data; 
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
}
