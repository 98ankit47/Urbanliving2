<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Floors;

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
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        
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
            'image'=>$name,
        ]);
        return ['success'=>'floor created Successfully'];
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
        //
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
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
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
            'image'=>$name,
        ]);
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
