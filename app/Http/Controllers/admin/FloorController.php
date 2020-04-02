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
