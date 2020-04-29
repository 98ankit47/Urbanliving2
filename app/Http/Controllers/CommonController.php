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
        foreach($features as $feature)
        {
            $data.=' <div class="card" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-4" style="text-align:center;">
                        <img class="card-img-top" style="height:150px; width:100%" src="/uploads/homeFeature/'.$feature->image.'">
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
                <div class="wrapper">
                    <button class="btn w-100" type="button" data-id="'.$homes->id.'" data-toggle="modal" data-target="#helloo" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" >Delete</button>
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
                    <div class="row">
                        <div class="col-md-6" style="text-align:center;">
                            <i class ="fa fa-clock" style="font-size:15px; color:#DC143C;"> '.$enquiry->created_at->format('d M Y').' </i>
                        </div>
                        <div class="col-md-6" style="text-align:center;">
                            <i class ="fa fa-eye" style="font-size:15px; color:#DC143C;"> Mark as read </i>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-md-6" style="text-align:center;">
                            <i class ="fa fa-clock" style="font-size:15px; color:#DC143C;"> '.$enquiry->created_at->format('d M Y').' </i>
                        </div>
                        <div class="col-md-6" style="text-align:center;">
                            <i class ="fa fa-eye" style="font-size:15px; color:#DC143C;"> Mark as read </i>
                        </div>
                    </div>
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
        $data.='<table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                <td bgcolor="#5962ee" align="center"><p class="text-center" style="color:white;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td align="center" valign="top" style="padding: 0 0 0 0;"> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr> 
                    <td bgcolor="#5962ee" align="center" style="padding: 0px 10px 0px 10px; ">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" valign="top" style="padding: 0 0 0 0; border-radius: 4px 4px 0px 0px; color: #111111; font-size: 44px; font-weight: 400;  line-height: 48px;">
                                    <div class="row">
                                    <div class="col-md-4"> 
                                    <img src="https://urbanliving.com/imgs/82" width="100" height="100" style="display: block; border: 0px;" />
                                    </div>
                                    <div class="col-md-8">
                                    <p style="color: #71aea5; margin: 2;text-align: left; font-size:18px;">Hi Admin,<br> There is an Enquiry from <b>'.$enquiries->name.'</b> </p><br>
                                    </div>
                                    </div>
                                    </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <br>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 0px 0px 0px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="font-size: 18px;text-align: left; ">Here are the details of Timing!</p>
                                <table class="table" style="font-size: 16px;text-align: left;">
                                    
                                    <tr class="row row-contain">
                                        <th style="padding:8px; width:164px;">Home Name</th>
                                        <th style="padding:8px; ">'.$home->title.'</th>
                                    </tr>
                                    <tr class="row row-contain">
                                            <td style="padding:8px; width:164px;">Enquiry Time</td>
                                            <td style="padding:8px;">'.$enquiries->time.'</td>
                                        </tr>
                                        <tr class="row row-contain">
                                            <td style="padding:8px; width:164px;">Enquiry Date</td>
                                            <td style="padding:8px;">'.$enquiries->date.'</td>
                                        </tr>
                                </table>
                                    <p style="font-size: 18px;text-align: left; ">Here are the details of User !</p>
                                    <table class="table" style="font-size: 16px;text-align: left;">
                                        <tr class="row row-contain"  style="color:black; padding-left:4px;">
                                            <th style="padding:8px;font-size:18px; width:164px;"><b>Name</b></th>
                                            <th style="padding:8px;font-size:18px; "><b>'.$enquiries->name.'</b></th>
                                        </tr>
                                        <tr class="row row-contain">
                                            <td style="padding:8px; width:164px;">Email</td>
                                            <td style="padding:8px; ">'.$enquiries->email.'</td>
                                        </tr>
                                        <tr class="row row-contain">
                                            <td style="padding:8px; width:164px;">Contact No.</td>
                                            <td style="padding:8px; ">'.$enquiries->phone.'</td>
                                        </tr>
                                    </table>   
                                    <div class="container">
                                        <span style="color:black;"><strong>Message:</strong></span><br>
                                        <div class="card">
                                            <div class="card-body">
                                                <span>'.$enquiries->message.'</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px; margin-bottom:50px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#484848" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: white;  font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0; font-size: 15px;"><a href="#" target="_blank" style="color: white;">Urban Living</a></p>
                                    <h2 style="font-size: 12px; font-weight: 400; color:white; margin: 0;">Copyright 2020 | All Rights Reserved</h2>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0 10px 0px 10px; margin-bottom:50px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="white" align="center" style="padding: 10px 20px 10px 10px; border-radius: 4px 4px 4px 4px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <h2 style="font-size: 20px; font-weight: 400; color: #111111; margin: 0;"></h2>
                                    <p style="margin: 0;"><a href="#" target="_blank" style="color: sky#34495E ;"></a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                </table>
        </body>';

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

    public function AvailableShow($id)
    {
        $data ='';
        $avbs= HomeAvailable::where('home_id',$id)->get();
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
                <a onclick="Editloadmap('.$avb->id.')" style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#2DCC70;" class="btn w-100">Edit</a> 
                </div>
                <div class="col-md-2"></div>
                <div class ="col-md-4">
                <button style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" data-id="'.$avb->id.'" class="btn w-100">Delete</button>  
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
        return HomeAvailable::get();
    }
}
