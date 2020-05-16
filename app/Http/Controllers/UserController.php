<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function changeDetail(Request $request)
    {    
        $user = User::where('id',$request['id'])->get()->first();
        User::where('id',$request['id'])->update([
            'email'=>$request['email'],
            'name'=>$request['username'],
        ]);
        return "success";
    }

    public function changepass(Request $request)
    {    
        $user = User::where('id',$request['id'])->get()->first();
        $oldpass=$request['current'];
        if(Hash::check($oldpass, $user->password))
        {
            User::where('id',$request['id'])->update([
                'password'=>Hash::make($request['newpass'])
            ]);
            
        }
        else
        {
            return ["danger" => "Your current Password is not correct" ];
        }
        return "success";
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
            'status'    =>  1,
        ]);
        return "success";
    }


}
