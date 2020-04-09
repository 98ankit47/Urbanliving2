<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
use App\Models\Logos;
use App\Models\Homes;
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
            $data.=' <div class="card">
                    <div class="row" style="margin-left:5px; margin-right:5px; margin-top:15px; margin-bottom:15px;">
                        <div class="col-md-4">
                        <img class="card-img-top" style="height:150px; width:200px;" src="/uploads/homeFeature/'.$feature->image.'">
                        </div> 
                        <div class="col-md-4">
                        <span class="card-title" style="font-size: 20px;">'.$feature->title.'</span>
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
                        <span><a href="#" class="a1" data-toggle="modal" data-target="#modal-delete" id=""><i class="fa fa-trash"></i></a></span>
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
        $data =[];
        $homes= Homes::where('id',$id)->get('gallery')->first();
        $data=explode(',', $homes->gallery);
        foreach($data as $feature)
        {
            echo "----".$feature;
        }
        return ; 
    }
    
}
