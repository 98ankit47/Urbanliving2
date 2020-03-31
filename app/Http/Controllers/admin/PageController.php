<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $return ='';
        $pages = Pages::all();
        foreach($pages as $ky => $page )
        {
            $return .= '<tr><td>'.(++$ky).'</td><td>'.$page->title.'</td><td>'.$page->meta_title.'</td><td>'.$page->meta_description.'</td>
            <td><img style="width:50px; height:50px;" src = "/uploads/'.$page->featured_image.'"></td>
            <td>
            <span><a href="pages/edit/'.$page->id.'" style="text-decoration:none;color:#212529;"><i class="far fa-edit"></i></a></span>
             <span><a href="pages/edit" style="text-decoration:none;color:#212529;"><i class="far fa-file"></i></a></span>
          </td>
            </tr>';
        } 
        return $return ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $slug         =  str_slug($request['title'],'-');
        $featured_img =  Str::slug($request['title'], '-').time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads\featuredImages\\').$featured_img);
        if (Pages::create([
            'title'             => $request['title'],
            'meta_title'        => $request['meta-title'],
            'meta_description'  => $request['meta-des'],
            'description'       => $request['editordata'],
            'slug'              => $slug,
            'featured_image'    => $featured_img,
            'type'              => 0,
            'relative_id'       => 0
        ])
        )
        {
            return ["success"];
        }
        else
        {
            return ["something went wrong"];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Pages::where('id',$id)->get()->first();

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
        //
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
