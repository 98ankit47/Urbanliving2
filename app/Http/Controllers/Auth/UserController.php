<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
        $this->validate($request, [ 
            'username' => ['required','regex:/^[a-zA-Z\s]*$/'], 
            'email' => 'required|email', 
            'password' => 'required', 
            'confirm_password' => 'required|same:password', 
            'type' => 'required'
        ]);
        $emailExist = User::where('email', $request['email'])->get()->first();
        if(!$emailExist):
            $user = User::create([
                'email'     =>  $request['email'],
                'name'      =>  $request['username'],
                'password' => Hash::make($request['password']),
                'role_id'      =>  $request['type'],
                'status'    =>  1,
            ]);
            Auth::login($user);
            $success['status'] = true;
            $success['user'] =  $user;
            return response()->json(['data'=>$success]);
        else:
            $fail['status'] = false;
            $fail['msg'] = "Email Already Exists.";
            return response()->json(['data'=>$fail]);
        endif;         

    }
    public function login(Request $request){ 
        $this->validate($request, [  
            'email' => 'required|email', 
            'password' => 'required', 
            ]);
        
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user();
            Auth::login($user); 
            $success['status'] = true;
            $success['user'] =  $user; 
            return response()->json($success); 
        } 
        else{ 
            return response()->json(['error'=>'Invalid Credentials'], 401); 
        } 
    }
    public function loginStatus()
    {
        # code...
        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user();
            $success['status'] = true;
            $success['user'] =  $user; 
            return response()->json( $success);
        }
        else{
            $success['status'] = false;
            return response()->json( $success);
        }
    }
    public function logout()
    {
        # code...
        Auth::logout();
        $success['status'] = true;
        return response()->json( $success);
    }

}
