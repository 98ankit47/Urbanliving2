<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    
    // protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function showLoginForm()
    {
        $intendedURL = \Session::get('url.intended');
        if($intendedURL) {
            Session::flash('message', 'You must log in to continue');
        }

        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = ['email' => $request->email, 'password' => $request->password,'status'=>1];
        if ( Auth::attempt($credentials) ) 
        {

            if(Auth::user()->type == 'admin'){
                // reidirect to danshboard
                return redirect()->route('dashboard');
            } 
            else if(Auth::user()->type == 'user')
            {
                 
                    return redirect('/userProfile');
              
            }
        }
        else{
            return redirect()->back()->withErrors(['email' => 'Invalid Login ID or password']);
        }
    }
   
    
}
