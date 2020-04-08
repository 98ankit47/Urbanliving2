<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
Use App\Models\Features;
Use App\Models\Homes;
Use App\Models\HomeCommunity;
Use App\Models\status;
Use App\Models\Communities;
use App\Http\Controllers\Controller;
use Redirect;

class HomeFeatureController extends Controller
{ 
    

   public function index(Request $request)
   {
       $id= $request['id'];
       $features = Features::where('home_id',$id)->get(); 
       $homes = Homes::where('id',$id)->get(); 
       $status = status::where('id',$homes[0]->status_id)->get();     
       $rel = HomeCommunity::where('home_id',$id)->get()->first(); 
       $community=Communities::where('id',$rel->community_id)->get();
       return view('admin.homes.manage_homes')->with('community',$community)->with('features',$features)->with('homes',$homes)->with('statuses',$status) ;
   }
    
   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    $image =  explode('.',$request['image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
        $request['image'],';')))[1])[1];  

    \Image::make($request['image'])->save(public_path('uploads\homeFeature\\').$image);
            $this->validate($request,[
           'title'=>'required',
           ]);
       Features::create([
           'home_id'=>$request['home_id'],
           'title'=>$request['title'],
            'image'=>$image,
       ]);
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       return Features::where('id',$id)->get()->first();
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
        $featured_img =  explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads').$featured_img);
        
       $this->validate($request,[
           'title'=>'required',
           'home_id'=>'required'
           ]);
       Features::where('id',$id)->update([
           'home_id'=>$request['home_id'],
           'title'=>$request['title'],
            'image'=>$featured_img,
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
       $feature = Features::findOrFail($id);
       $feature->delete(); 
   }
  
}
