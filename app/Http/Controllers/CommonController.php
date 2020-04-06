<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
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
            $data.=' 
                    <div class="row">
                        <div class="col-md-4">
                        <img class="card-img-top" style="height:100px; width:150px;" src="/uploads/homeFeature/'.$feature->image.'">
                        </div> 
                        <div class="col-md-4">
                        <span class="card-title" style="font-size: 15px;">'.$feature->title.'</span>
                        </div>
                        <div class="col-md-4">
                        <button  onclick="editfeature('.$feature->id.')" style="font-size: 10px;" class="btn btn-success">Edit</button>  
                        <button class="btn btn-danger" data-id="'.$feature->id.'" data-toggle="modal" data-target="#deleteFeature"  style="font-size: 10px;" >Delete</button>
                        </div>
                    </div>  <br><br> ';
            
        }
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
}
