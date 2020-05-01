<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;                        
use App\Http\Controllers\Controller;
use App\Models\Homes;
use App\Models\HomeCommunity;
use App\Models\Communities;
use App\HomeAvailable;
use Illuminate\Support\Str;
use App\Models\status;
Use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $data ='';
        $homes = Homes::all();
        foreach($homes as $ky => $home )
        {
            $data .=' <div class="col-md-4" >
            <div class="card">
              <img class="card-img-top" style="height:200px;" src="/uploads/homes/'.$home->featured_image.'">
              <div class="card-body">
                <h5 style="font-size: 16px;text-align:center; font-family: Open Sans, sans-serif;">'.$home->title.'</h5>
                 <br>
                 <div class="row">
                 <div class="col-md-1"></div>
                 <div class ="col-md-4">
                 <a style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#60ACEF;"  href="/admin/home/manage/'.$home->id.'" class="btn w-100">Manage</a> 
                 </div>
                 <div class="col-md-2"></div>
                 <div class ="col-md-4">
                 <button style="font-family: Open Sans, sans-serif;color:white;width:100px;text-align:center;font-weight:bold; background-color:#F6454F;" data-id="'.$home->id.'" data-toggle="modal" data-target="#deleteHome" class="btn w-100">Delete</button>  
                </div>
                </div>
                 </div>
            </div>
          </div>';
        } 
        return $data ;
    }

    public function data()
    {
        return Homes::get();
    }
     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[];
        $featured_img =  time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads\homes\\').$featured_img);
       
        $gallery=$request['gallery'];
        $gallery_name=$request['gallery_name'];
        foreach($gallery as $key => $gal)
        {
            $gal_img =  time().explode('.',$gallery_name[$key])[0].'.' . explode('/', explode(':',substr($gal,0,strpos(
                $gal,';')))[1])[1];  
    
            \Image::make($gal)->save(public_path('uploads\gallery\\').$gal_img);
            array_push($data,$gal_img);
        }
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'stories'=>'required',
            'mls'=>'required',
            'area'=>'required',
            'price'=>'required',
            ]);
        Homes::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'bedroom'=>$request['bedroom'],
            'bathroom'=>$request['bathroom'],
            'garage'=>$request['garage'],
            'stories'=>$request['stories'],
            'mls'=>$request['mls'],
            'builder'=>$request['builder'],
            'area'=>$request['area'],
            'lat'=>$request['lat'],
            'lng'=>$request['lng'],
            'price'=>$request['price'],
            'featured_image'=>$featured_img,
            'gallery'=>implode(',', $data),
            'slug'=>Str::slug($request['title'], '-'),
            'status_id'=> $request['status'],
        ]);
        $home=Homes::where('slug',Str::slug($request['title'], '-'))->get()->first();
        HomeCommunity::create([
            'home_id'=>$home->id,
            'community_id'=>$request['community']
        ]);
        return ['success'=>'Home Successfully Created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $home= Homes::where('id',$id)->get()->first();
        $community=HomeCommunity::where('home_id',$id)->orderBy('updated_at','desc')->get()->first();
           $temp = array(
                "title" =>$home->title,
                "description" =>$home->description,
                "bedroom" =>$home->bedroom,
                "bathroom" =>$home->bathroom,
                "garage" =>$home->garage,
                "stories" =>$home->stories,
                "mls" =>$home->mls,
                "area" =>$home->area,
                "builder" =>$home->builder,
                "status" =>$home->status_id,
                "price" =>$home->price,
                "lat" =>$home->lat,
                "lng" =>$home->lng,
                "community_list"=>$community->community_id,
             );
                return $temp;
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
        $home =  Homes::whereId($id)->first();
        // if ($request->hasFile('featured-image')) {
            $featured_img =  time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
                $request['featured-image'],';')))[1])[1];  
    
            \Image::make($request['featured-image'])->save(public_path('uploads\homes\\').$featured_img);
           
        // }
        // else{
        //     $featured_image_name=$home->featured_image;
        // }
        
        $data = explode(',', $home->gallery);
        $gallery=$request['gallery'];
        $gallery_name=$request['gallery_name'];
        foreach($gallery as $key => $gal)
        {
            $gal_img =  time().explode('.',$gallery_name[$key])[0].'.' . explode('/', explode(':',substr($gal,0,strpos(
                $gal,';')))[1])[1];  
    
            \Image::make($gal)->save(public_path('uploads\gallery\\').$gal_img);
            array_push($data,$gal_img);
        }
         
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'stories'=>'required',
            'mls'=>'required',
            'area'=>'required',
            'builder'=>'required',
            'status'=>'required',
            'lat'=>'required',
            'lng'=>'required',
            'price'=>'required',
            ]);
        Homes::where('id',$id)->update([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'bedroom'=>$request['bedroom'],
            'bathroom'=>$request['bathroom'],
            'garage'=>$request['garage'],
            'stories'=>$request['stories'],
            'mls'=>$request['mls'],
            'area'=>$request['area'],
            'builder'=>$request['builder'],
            'status_id'=>$request['status'],
            'lat'=>$request['lat'],
            'lng'=>$request['lng'],
            'price'=>$request['price'],
            'featured_image'=>$featured_img,
            'gallery'=>implode(',', $data),
            'slug'=>Str::slug($request['title'], '-'),
        ]);

        $home=Homes::where('slug',Str::slug($request['title'], '-'))->get()->first();
        HomeCommunity::where('home_id',$id)->update([
            'home_id'=>$home->id,
            'community_id'=>$request['community']
        ]);
        return ['success'=>'Home Successfully Edit'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $home = Homes::findOrFail($id);
        $home->delete();   
        DB::table('home_communities')->where('home_id',$id)->delete();
        DB::table('features')->where('home_id',$id)->delete();   
        DB::table('floors')->where('home_id',$id)->delete();   
        return ['success'=>'Home Successfully Deleted'];
    }

    public function Available(Request $request)
    { 
        $this->validate($request,[
            'home_id'=>'required',
            'lat'=>'required',
            'lng'=>'required',
            ]);
        HomeAvailable::create([
            'home_id'=>$request['home_id'],
            'lat'=>$request['lat'],
            'lng'=>$request['lng'],
        ]);
        return "success";
    }
    public function Availableupdate(Request $request ,$id)
    { 
        $this->validate($request,[
            'lat'=>'required',
            'lng'=>'required',
            ]);
        HomeAvailable::where('id',$id)->update([
            'lat'=>$request['lat'],
            'lng'=>$request['lng'],
        ]);
        return "success";
    }
}
