<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Homes;
use App\Models\Communities;
use App\Models\HomeCommunity;
use App\Models\Enquiry;
use App\User;
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
                     $home      = Homes::with('communities')->where('id',$rel->home_id)->get();
                     return view('user.homeDetail.index')->with('homes',$home);
                }
            }
            return "No Record Found";
         }
         else
         {
            $home=Homes::with('communities')->where('title','LIKE','%'.$data.'%')->orWhere('builder','LIKE','%'.$data.'%')->get();
            return view('user.homeDetail.index')->with('homes',$home);
         }

    }

    public function AllHome()
    {
        $home= Homes::with('communities')->get();
        return view('user.homeDetail.index')->with('homes',$home);
    }

    public function single(Request $request)
    {
        $id = $request['id'];
        $home= Homes::with('communities')->with('floor')->with('feature')->where('id',$request['id'])->get();
        return view('user.homeDetail.singlehome')->with('homes',$home);
    }

    public function schedule(Request $request)
    {
        $this->validate($request,[
            'date'=>'required',
            'time'=>'required',
            'name'=>'required',
            'home_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'seen'   =>'required',
            ]);

        Enquiry::create([
            'date'=>$request['date'],
            'time'=>$request['time'],
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'seen'=>$request['seen'],
            'home_id'=>$request['home_id'],
            'message'=>$request['message'],
        ]);
        return "ankit";

    }

    public function UpdateEnquirySeen($id)
    {
        Enquiry::where('id',$id)->update([
            'seen'=>1,
        ]);
        return redirect()->route('enquiry_detail',$id);
    }
    public function signup(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'name'=>'required',
            'password' => ['required', 'string', 'min:8',],
            ]);

        User::create([
            'email'     =>  $request['email'],
            'name'      =>  $request['name'],
            'password' => Hash::make($request['password']),
            'type'      =>  'user',
        ]);
        return "success";
    }
    public function map(Request $request)
    {
        return Homes::get();

    }
    public function mapHomeView(Request $request)
    {
        $data='';
        $homes = Homes::all();
        foreach($homes as $home)
        {
            $data.='<div class="card" style="width: 100%; height:15rem; id="home'.$home->id.'">
                    <img style="height:320px;" src="/uploads/homes/'.$home->featured_image.'"/>
                    <a href="/development-Detail/'.$home->id.'" type="button" class="btn btnss btn-outline-dark">DETAILS</a>
                    <button type="button" class="btn btns btn-outline-dark">SUMMARY</button>
                    </div><br>';
        }
        return $data;
    }
    
    public function mapMarkerHome($lat,$lng)
    {
        $homes = Homes::where('lat',$lat)->where('lng',$lng)->get()->first();
        return $homes;
    }
}
