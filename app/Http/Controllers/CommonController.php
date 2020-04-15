<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
use App\Models\Logos;
use App\Models\Homes;
use App\Models\Enquiry;
use App\User;
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
        $id=$request['id'];
        $users= User::get();
        foreach($users as $user)
        {
            $data.=' <tr>
                        <td>'.$user->id.'</td>
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
        $enquiries= Enquiry::orderBy('created_at','desc')->get();
        foreach($enquiries as $key=> $enquiry)
        {
            $home= homes::where('id',$enquiry->home_id)->get()->first();
            $data.='<a class="tablink" style="text-decoration:none" type="button" href="/admin/enquiryDetail/'.$enquiry->id.'">
            <div class="row">
              <div class="column" style="width:98%;font-family: Open Sans, sans-serif;">
                <strong>Message from <u style="color:red">'.$enquiry->name.'</u> for Visting home <u style="color:red">'.$home->title.'</u> </strong>
                <p style="font-size: 14px; color: gray; font-family: Open Sans, sans-serif;">Click for Visiting Detail !</p>  
              </div>
              <div class="column" style="width:2%; padding-top: 20px;">
                <i class ="fa fa-angle-right" style="font-size:25px; color:gray;"></i>
              </div>
            </div>
          </a>';
        }
        return $data; 
    }

    public function enquiryDetail($id)
    {
        $data ='';
        $enquiries= Enquiry::where('id',$id)->get()->first();
        $home= homes::where('id',$enquiries->home_id)->get()->first();
            $data.='<table>
            <tr>
              <th style="text-align: center;">Name</th>
              <th style="text-align: center;">Home Name</th>
              <th style="text-align: center;">Email</th>
              <th style="text-align: center;">Ph. No.</th>
              <th style="text-align: center;">Message</th>
              <th style="text-align: center;">Time</th>
              <th style="text-align: center;">Date</th>
            </tr>
            <tr>
              <td>'.$enquiries->name.'</td>
              <td>'.$home->title.'</td>
              <td>'.$enquiries->email.'</td>
              <td>'.$enquiries->phone.'</td>
              <td>'.$enquiries->message.'</td>
              <td>'.$enquiries->time.'</td>
              <td>'.$enquiries->date.'</td>
            </tr>
          </table>';
        
        return $data; 
    }
    
}
