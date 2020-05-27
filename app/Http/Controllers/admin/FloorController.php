<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Floors;
use App\Models\FloorComponent;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img =  explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
            $request['image'],';')))[1])[1];  

        \Image::make($request['image'])->save(public_path('uploads\floor\\').$img);
       
        $this->validate($request,[
            'home_id'=>'required',
            'floor_no'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'kitchen'=>'required',
            'dining'=>'required',
            ]);
        Floors::create([
            'home_id'=>$request['home_id'],
            'floor_no'=>$request['floor_no'],
            'bedroom'=>$request['bedroom'],
            'bathroom'=>$request['bathroom'],
            'garage'=>$request['garage'],
            'kitchen'=>$request['kitchen'],
            'dining'=>$request['dining'],
            'image'=>$img,
        ]);
        return ['success'=>'floor created Successfully'];
    }

    public function Componentstore(Request $request)
    {
      $type=$request['type'];
      $id=$request['floor_id'];
      $floor=Floors::where("id",$request['floor_id'])->get($type)->first();
      $count=FloorComponent::where('floor_id',$id)->where('type',$type)->get()->count();
      if($floor->$type > $count)
      {
        $img =  explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
          $request['image'],';')))[1])[1];  

      \Image::make($request['image'])->save(public_path('uploads\floorcomponent\\').$img);
      $this->validate($request,[
          'floor_id'=>'required',
          'name'=>'required',
          'type'=>'required',
          'cno'=>'required',
          ]);
      FloorComponent::create([
          'floor_id'=>$request['floor_id'],
          'name'=>$request['name'],
          'type'=>$request['type'],
          'component_no'=>$request['cno'],
          'bathroom'=>$request['bathroom'],
          'image'=>$img,
      ]);
      return ['success'=>'floor Component created Successfully'];
      }
      else
      {
        return ['danger'=>'Limit exceed'];
      }
    }

    /**
     * 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
      return Floors::where('id',$id)->get()->first();
    }
    public function componentshow($id) 
    {
      return FloorComponent::where('id',$id)->get()->first();
    }

    public function showFloorComponent(Request $request, $type, $id)
    {
      $data='';
      $components = FloorComponent::where('floor_id',$id)->where('type',$type)->get();
      $data.='<div class="col-md-4">
        <a  style="text-decoration:none" onclick="addFloorComponent()">
            <div class="card addcard" style="border:2px dotted #666666; background-color:#e4e4e4; height:330px;">
            <img class="card-img-top" style="height:120px;margin-top:20%;width:120px;margin-left:31%;" src="https://cdn3.iconfinder.com/data/icons/houses-11/64/131-Houses-Original_house-home-new-add-512.png">
            <div class="card-body"> <br>
                <h4 style="text-align:center;margin-top:30px;font-weight:bold;color:darkgray"> ADD NEW '.$type.'</h4>
            </div>
            </div>
        </a>
      </div>';
      foreach($components as $ky => $component )
      {
          $data .='<div class="col-md-4">
          <div class="card floor-card">
            <img class="card-img-top" type="button" style="height:200px;" data-toggle="modal" data-target="#viewFloor" src="/uploads/floorcomponent/'.$component->image.'" alt="">
              <div class="card-body">
              <h5 style="font-size: 16px;text-align:center;">'.$component->name.'</h5>
               <br><div class="row">
               
               <div class ="col-md-6" style="text-align:center;">
                 <button type="button" onclick="editfloorcomponent('.$component->id.')" style="color:white;text-align:center;font-weight:bold;" class="btn btn-block btn-info"><i class="la la-pencil-square"></i> Edit</button> 
                </div>
                
                <div class ="col-md-6" style="text-align:center;">
                 <button type="button" data-toggle="modal" data-id="'.$component->id.'" style="color:white;text-align:center;font-weight:bold; background-color:#F6454F;" data-target="#deleteFloorComponent" class="btn btn-block"><i class="ft-x"></i> Delete</button> 
                </div>
               </div>
                </div>
               
          </div>
        </div>';
      } 
      return $data ;
    }

    
    public function showHomeFloor($id)
    {
        $bedroom = 'bedroom';
        $bathroom = "bathroom";
        $garage = "garage";
        $kitchen = "kitchen";
        $dining = "dining";
        $floors = Floors::where('home_id',$id)->orderBy('floor_no')-> get();
        $data ='';
        foreach($floors as $ky => $floor )
        {
            $data .='
              <div class="card" style="font-family: Open Sans, sans-serif;">
                <div class="row">
                  <div class="col-md-4"><br>
                    <h4 style="text-align:center">Floor No :: '.$floor->floor_no.'<h4><br>
                    <img class="card-img-top"  src="/uploads/floor/'.$floor->image.'" alt="">
                  </div> 
                  <div class="col-md-8"><br>
                    <h4 style="text-align:center">Floor Detail<h4><br>
                    <table class="table table-hover" style="font-size:13px;text-align:left;">
                      <thead>
                        <tr>
                          <th scope="col">Type</th>
                          <th scope="col">Number</th>
                          <th scope="col">View</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td >Bedroom</td>
                          <td>'.$floor->bedroom.'</td>
                          <th scope="col"><small><a type="button" onclick="floorComponent(\''. $bedroom . '\','.$floor->id.')" style="color:#2DCC70">Click Here<a><small></th>
                        </tr>
                        <tr>
                          <td >Bathroom</td>
                          <td>'.$floor->bathroom.'</td>
                          <th scope="col"><small><a style="color:#2DCC70" type="button" onclick="floorComponent(\''. $bathroom . '\','.$floor->id.')">Click Here<a><small></th>
                        </tr>
                        <tr>
                          <td >Kitchen</td>
                          <td>'.$floor->kitchen.'</td>
                          <th scope="col"><small><a style="color:#2DCC70" type="button" onclick="floorComponent(\''. $kitchen . '\','.$floor->id.')">Click Here<a><small></th>
                        </tr>
                        <tr>
                          <td >Dining</td>
                          <td>'.$floor->dining.'</td>
                          <th scope="col"><small><a style="color:#2DCC70" type="button" onclick="floorComponent(\''. $dining . '\','.$floor->id.')">Click Here<a><small></th>
                        </tr>
                        <tr>
                          <td >Garage</td>
                          <td>'.$floor->garage.'</td>
                          <th scope="col"><small><a style="color:#2DCC70" type="button" onclick="floorComponent(\''. $garage . '\','.$floor->id.')">Click Here<a><small></th>
                        </tr>                 
                      </tbody>
                    </table>
                  </div> 
                </div>  
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class ="col-md-3" style="text-align:center;margin-bottom:10px">
                    <button type="button" onclick="editfloor('.$floor->id.')" style="font-family: Open Sans, sans-serif;color:white;text-align:center;font-weight:bold;" class="btn btn-block btn-info"><i class="la la-pencil-square"></i> Edit</button> 
                  </div>
                  <div class="col-md-2"></div>
                  <div class ="col-md-3" style="text-align:center;margin-bottom:10px">
                    <button type="button" data-toggle="modal" data-id="'.$floor->id.'" style="font-family: Open Sans, sans-serif;color:white;;text-align:center;font-weight:bold; background-color:#F6454F;" data-target="#deleteFloor" class="btn btn-block"><i class="ft-x"></i> Delete</button> 
                  </div>
                </div>
              </div>';
        } 
        return $data ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if($request['image-name']=="a")
      {
        $floor=Floors::where('id',$id)->get()->first();
        $img=$floor->image;
      }
      else
      {
          $img =  explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
            $request['image'],';')))[1])[1];  

        \Image::make($request['image'])->save(public_path('uploads\floor\\').$img);
      }
        $this->validate($request,[
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'kitchen'=>'required',
            'dining'=>'required',
            ]);
        Floors::where('id',$request['id'])->update([
            'bedroom'=>$request['bedroom'],
            'bathroom'=>$request['bathroom'],
            'garage'=>$request['garage'],
            'kitchen'=>$request['kitchen'],
            'dining'=>$request['dining'],
            'image'=>$img,
        ]);
        return ['success'=>'floor updated Successfully'];
    }

    public function Componentupdate(Request $request, $id)
    {
      if($request['image-name']=="a")
      {
          $component=FloorComponent::where('id',$id)->get()->first();
          $img=$component->image;
      }
      else 
      {
          $img =  explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
            $request['image'],';')))[1])[1];  

        \Image::make($request['image'])->save(public_path('uploads\floorcomponent\\').$img);
      }
        
          
        $this->validate($request,[
            'floor_id'=>'required',
            'name'=>'required',
            'type'=>'required',
            'cno'=>'required',
            ]);
        FloorComponent::where('id',$id)->update([
            'floor_id'=>$request['floor_id'],
            'name'=>$request['name'],
            'component_no'=>$request['cno'],
            'type'=>$request['type'],
            'image'=>$img,
        ]);
        return ['success'=>'floor Component updated Successfully'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $floors = Floors::findOrFail($id);
      $floors->delete();
    }
    public function deleteFloorComponent($id)
    {
      $component = FloorComponent::findOrFail($id);
      $component->delete();
    }
}