<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Communities;

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
                        <a href="/neighborHomes" type="button" class="btn single btn-outline-dark">Single Family</a>
                        <a href="/neighborHomes" type="button" class="btn town btn-outline-dark">TownHouse/Condo</a>
                        <a href="/neighborHomes" type="button" class="btn mid btn-outline-dark">Mid/Hi Rise Condo</a>
                    </div><br>';
        }
        return $data;
    }
}
