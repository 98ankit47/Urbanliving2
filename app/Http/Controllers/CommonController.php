<?php

namespace App\Http\Controllers;
use App\Models\status;
use App\Models\Features;
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
            $data.='<div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" style="height: 150px;" src="/uploads/'.$feature->image.'" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="container details">
                                    <h6 style="font-size: 12px;">'.$feature->title.'</h6><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button  onclick="editfeature('.$feature->id.')" style="font-size: 10px;" class="btn btn-success">Edit</button>
                                             </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-danger" data-id="'.$feature->id.'" data-toggle="modal" data-target="#deleteFeature"  style="font-size: 10px;" >Delete</button>
                                            </div>
                                        </div>
                                </div>
                            </div>    
                        </div>
                    </div>';
        }
        return $data;        
    }
}
