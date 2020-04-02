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

        \Image::make($request['image'])->save(public_path('uploads\homes\\').$img);
       
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
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        $this->validate($request,[
            'floor_id'=>'required',
            'name'=>'required',
            'type'=>'required',
            ]);

        FloorComponent::create([
            'floor_id'=>$request['floor_id'],
            'name'=>$request['name'],
            'type'=>$request['type'],
            'bathroom'=>$request['bathroom'],
            'image'=>$name,
        ]);
        return ['success'=>'floor Component created Successfully'];
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

    public function showModelFloor($id)
    {
        $floors = Floors::where('id',$id)->get();
        $data ='';
        foreach($floors as $ky => $floor )
        {
            $data .='<div class="row">
            <div class="col-md-6">
              <span><strong>NO. OF BEDROOMS   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->bedroom.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-success">CLICK HERE</button> 
            </div>
          </div><br>
          
          <div class="row">
            <div class="col-md-6">
              <span><strong>NO. OF BATHROOMS   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->bathroom.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-success">CLICK HERE</button> 
            </div>
          </div><br>
        
          <div class="row">
            <div class="col-md-6">
              <span><strong>NO. OF GARAGE   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->garage.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-success">CLICK HERE</button> 
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <span><strong>NO. OF DINING   :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->dining.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-success">CLICK HERE</button> 
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <span><strong>NO. OF KITCHEN :</strong></span>
            </div>
            <div class="col-md-2">
              <span>'.$floor->kitchen.'</span>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-success">CLICK HERE</button> 
            </div>
          </div>';
        } 
        return $data ;
    }
    
    public function showHomeFloor($id)
    {
        $floors = Floors::where('home_id',$id)->get();
        $data ='';
        foreach($floors as $ky => $floor )
        {
            $data .='
            <div class="col-md-4">
              <div class="card floor-card">
                <img class="card-img-top" type="button" onclick="floorinfo('.$floor->id.')"  src="https://nydsgn.com/images/interiors/work_13.jpg" alt="">
                  <div class="card-body">
                    <button type="button" onclick="editfloor('.$floor->id.')" class="btn btn-warning">Edit</button> 
                    <button type="button" class="btn btn-danger">Delete</button> 
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

        \Image::make($request['image'])->save(public_path('uploads\homes\\').$img);
     
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
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        
        $this->validate($request,[
            'floor_id'=>'required',
            'name'=>'required',
            'type'=>'required',
            ]);
        FloorComponent::where('id',$id)->update([
            'floor_id'=>$request['floor_id'],
            'name'=>$request['name'],
            'type'=>$request['type'],
            'image'=>$name,
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
        //
    }
}
