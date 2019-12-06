<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class CommonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Frontend.homepage');
    }

    public function adminLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'fail','error'=>$validator,'message'=>'Please fill username and password both are required']);
        }
        else
        {
            if(Auth::attempt(['email'=>$request->username,'password'=>$request->password])){
                return response()->json(['status'=>'success','message'=>'Login Successful.']);
            }else{
                return response()->json(['status'=>'error','message'=> __('auth.failed' ) ]);
            }
        }
    }
	public function dashboard(){
		return view('Frontadmin.dashboard');
	}
}
