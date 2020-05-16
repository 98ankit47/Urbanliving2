<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Communities;
use App\Models\HomeCommunity;
use App\Models\Homes;

class NeighbourhoodController extends Controller
{
    function ShowCommunityList()
    {
        $data='';
        $communities = Communities::get();
        foreach($communities as $comm)
        {
            $data.='<div id="home1" class="card homebox1" style="width: 100%; height:24rem;" >
                        <img style="height:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkTHBpAyICO-H7DH0a6kYjGznn5y2WWRLuAw6PRn7QEkqfsuXt&usqp=CAU"/>
                        <a href="/neighborDetail/'.$comm->id.'" type="button" class="btn detail btn-outline-dark">Details</a>
                        <a href="/neighborHome/single/'.$comm->id.'" type="button" class="btn single btn-outline-dark">Single Family</a>
                        <a href="/neighborHome/town/'.$comm->id.'" type="button" class="btn town btn-outline-dark">TownHouse/Condo</a>
                        <a href="/neighborHome/mid/'.$comm->id.'" type="button" class="btn mid btn-outline-dark">Mid/Hi Rise Condo</a>
                    </div><br>';
        }
        return $data;
    }

    function showCommunityDetail($id)
    {
        $community=Communities::where('id',$id)->get()->first();
        return view('user.neighbor.neighborDetail')->with('community',$community);
    }
    function NeighTypeHome()
    {
        return view('user.neighbor.neighborHomes');
    }
    function showCommunityHome($type,$id)
    {
        $data='';
        $rel=HomeCommunity::where('community_id',$id)->get();
        foreach($rel as $rel)
        {
            $home = Homes::where('id',$rel->home_id)->get()->first();
            $data.='<div id="home1" class="card homebox1" style="width: 100%; height:24rem;" >
                    <img style="height:100%;" src="/uploads/homes/'.$home->featured_image.'"/>
                    <a href="#" type="button" class="btn detail btn-outline-dark">Details</a>
                    <a href="#" type="button" class="btn summary btn-outline-dark">Summary</a>
                    <div class="w3-center">
                        <div class="w3-section">
                            <a class="fav"><i style="color: #DC143C;" class="fa fa-heart" aria-hidden="true"></i></a>
                            <a class="share"><i style="color:white;" class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <div class="bottom-left" style="color:white;font-size:16px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span><b>$'.$home->price.'/b></span><br>
                                        <span><b>'.$home->title.'</b></span><br>
                                        <span><b>Houstan,TX,123</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>';
        }
        return $data;
    }


}
