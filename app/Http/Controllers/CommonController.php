<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use Illuminate\Support\Facades\Config;
use Notification;
use App\Notifications\userRegister;

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

    public function adminLogOut()
    {
        Auth::logout();
        return redirect('/admin');
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
            if(Auth::attempt(['email'=>$request->username,'password'=>$request->password,'user_role'=>'2']) || Auth::attempt(['email'=>$request->username,'password'=>$request->password,'user_role'=>'3'])){
                return response()->json(['status'=>'success','message'=>'Login Successful.']);
            }else{
                return response()->json(['status'=>'error','message'=> __('auth.failed' ) ]);
            }
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'fail','error'=>$validator,'message'=>'Please check all fields something is wrong']);
        }
        else
        {
            $user = new User();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->name = $request->input('first_name').' '.$request->input('last_name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->user_role = Config::get('constants.roles.customer'); // take value from constant file
            if($user->save())
            {
                $data = array('user_id'=>$user->id);
                //Notification::send(User::find($user->id), new userRegister($data));
                return response()->json(['status'=>'success','message'=>'Registered Successful Please check your email for verification.']);
            }
        }
    }

	public function dashboard(){
		return view('Frontadmin.dashboard');
	}
}
