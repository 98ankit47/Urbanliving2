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
        return "ankit";
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
      foreach($components as $ky => $component )
      {
          $data .='<div class="col-md-4" style="font-family: Open Sans, sans-serif;">
          <div class="card floor-card">
            <img class="card-img-top" type="button" data-toggle="modal" data-target="#viewFloor" src="/uploads/floorcomponent/'.$component->image.'" alt="">
              <div class="card-body">
              <h5 style="font-size: 16px;text-align:center; font-family: Open Sans, sans-serif;">'.$component->name.'</h5>
               <br><div class="row">
               
               <div class ="col-md-6" style="text-align:center;">
                 <button type="button" onclick="editfloorcomponent('.$component->id.')" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Edit</button> 
                </div>
                
                <div class ="col-md-6" style="text-align:center;">
                 <button type="button" data-toggle="modal" data-id="'.$component->id.'" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" data-target="#deleteFloorComponent" class="btn">Delete</button> 
                </div>
               </div>
                </div>
               
          </div>
        </div>';
      } 
      return $data ;
    }

    public function showModelFloor($id)
    {
        $floors = Floors::where('id',$id)->get();
        $data ='';
        $bedroom = 'bedroom';
        $bathroom = "bathroom";
        $garage = "garage";
        $kitchen = "kitchen";
        $dining = "dining";
        foreach($floors as $ky => $floor )
        {
            $data .='<div class="row" style="font-family: Open Sans, sans-serif;">
            <div class="col-md-6">
              <span><strong>NO. OF BEDROOMS   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->bedroom.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" onclick="floorComponent(\''. $bedroom . '\','.$floor->id.')" style="background-color:#ff6b56;" class="btn">CLICK HERE</button> 
            </div>
          </div><br>
          
          <div class="row" style="font-family: Open Sans, sans-serif;">
            <div class="col-md-6">
              <span><strong>NO. OF BATHROOMS   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->bathroom.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" onclick="floorComponent(\''. $bathroom . '\','.$floor->id.')" style="background-color:#ff6b56;" class="btn">CLICK HERE</button> 
            </div>
          </div><br>
        
          <div class="row" style="font-family: Open Sans, sans-serif;">
            <div class="col-md-6">
              <span><strong>NO. OF GARAGE   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->garage.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" onclick="floorComponent(\''. $garage . '\','.$floor->id.')" style="background-color:#ff6b56;" class="btn">CLICK HERE</button> 
            </div>
          </div>
          <br>
          <div class="row" style="font-family: Open Sans, sans-serif;">
            <div class="col-md-6">
              <span><strong>NO. OF DINING   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->dining.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" onclick="floorComponent(\''. $dining . '\','.$floor->id.')" style="background-color:#ff6b56;" class="btn">CLICK HERE</button> 
            </div>
          </div>
          <br>
          <div class="row" style="font-family: Open Sans, sans-serif;">
            <div class="col-md-6">
              <span><strong>NO. OF KITCHEN :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->kitchen.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" onclick="floorComponent(\''. $kitchen . '\','.$floor->id.')" style="background-color:#ff6b56;" class="btn">CLICK HERE</button> 
            </div>
          </div>';
        } 
        return $data ;
    }
    
    public function showHomeFloor($id)
    {
        $floors = Floors::where('home_id',$id)->orderBy('floor_no')-> get();
        $data ='';
        foreach($floors as $ky => $floor )
        {
            $data .='
            <div class="col-md-4" style="font-family: Open Sans, sans-serif;">
              <div class="card">
                <h4 style="text-align:center">Floor No :: '.$floor->floor_no.'<h4>
                <img class="card-img-top" type="button" onclick="floorinfo('.$floor->id.')"  src="/uploads/floor/'.$floor->image.'" alt="">
                  <div class="card-body">
                   <div class="row">
                   
                   <div class ="col-md-6" style="text-align:center;">
                     <button type="button" onclick="editfloor('.$floor->id.')" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#60ACEF;" class="btn">Edit</button> 
                    </div>
                    
                 <div class ="col-md-6" style="text-align:center;">
                     <button type="button" data-toggle="modal" data-id="'.$floor->id.'" style="font-family: Open Sans, sans-serif;color:white;width:100%;text-align:center;font-weight:bold; background-color:#F6454F;" data-target="#deleteFloor" class="btn">Delete</button> 
                    </div>
                   </div>
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
        Floors::where('id',$request['id'])->update([
            'home_id'=>$request['home_id'],
            'floor_no'=>$request['floor_no'],
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
        $img =  explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
          $request['image'],';')))[1])[1];  

      \Image::make($request['image'])->save(public_path('uploads\floorcomponent\\').$img);
          
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