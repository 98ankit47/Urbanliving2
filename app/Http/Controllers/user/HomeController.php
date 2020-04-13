<?php

namespace App\Http\Controllers\user;
use App\Models\Homes;
use App\Models\Communities;
use App\Models\HomeCommunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        $data=$request['search'];
         $count=Homes::where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get('title')->count();
         if($count==0)
         {
            $community=Communities::where('title','LIKE','%'.$data.'%')->get()->first();
            if(Communities::where('title','LIKE','%'.$data.'%')->get()->count()!=0)
            {
                $rel=HomeCommunity::where('community_id',$community->id)->get()->first();
                if(HomeCommunity::where('community_id',$community->id)->get()->count()!=0)
                {
                     return Homes::where('id',$rel->home_id)->get('title');
                }
            }
            return "No Record Found";
         }
         else
         {
           return Homes::where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get('title');
         }

    }

    public function AllHome()
    {
        return Homes::all();
    }
}
