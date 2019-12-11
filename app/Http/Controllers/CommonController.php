<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use Illuminate\Support\Facades\Config;
use Notification;
use App\Notifications\userRegister;
use App\Notifications\forgetPassword;
use Mail;
use Session;
use App\Model\UserMeta;
use App\Model\Media;
use Helper;
use Hash;

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
	public function test_email()
    {
        $to_name = 'Admin';
        $to_email = 'jmodanwal789@gmail.com';
        $data = array('name'=>'Info-INFO', 'body' => 'Info-12345678');
        Mail::send('mail.user.test', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Laravel Test Mail');
            $message->from('info@gigworks.me','Test Mail');
        });
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
            if(Auth::attempt(['email'=>$request->username,'password'=>$request->password,'user_role'=>'2','status'=>'1']) || Auth::attempt(['email'=>$request->username,'password'=>$request->password,'user_role'=>'3','status'=>'1'])){

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
            return response()->json(['status'=>'error','message'=> $validator->errors()->first('email') ]);
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
                Notification::send(User::find($user->id), new userRegister($data));
                return response()->json(['status'=>'success','message'=> __('auth.reg_success' ) ]);
            }else{
				return response()->json(['status'=>'error','message'=> __('auth.reg_failed' )]);
			}
        }
    }

	public function dashboard(){
		return view('Frontadmin.dashboard');
	}
	public function myprofile(){
        $user_obj = new User();
        $user_detail = $user_obj->getUser(Auth::id());
		return view('Frontadmin.profile',compact('user_detail'));
	}

    public function active_account($token){
        $check=User::where('forget_token',$token)->where('status','2')->first();
        if($check){
            User::where('id',$check->id)->update(['status'=>'1','forget_token' => NULL ]);
            Session::flash('success', __('messages.account_activate' ));
        }else{
            Session::flash('error', __('messages.token_mismatch' ));
        }
        return view('frontend.homepage');
    }

    public function forgot_password(Request $request){
        $check=User::where('email',$request->email)->where('status','1')->first();
        if($check){
            User::where('id',$check->id)->update(['status'=>'1']);
			$data = array('user_id'=>$check->id);
            Notification::send(User::find($check->id), new forgetPassword($data));
			return response()->json(['status'=>'success','message'=> __('messages.reset_password_link' ) ]);
        }else{
            //Session::flash('error', "This email does not exist. Please try again");
			return response()->json(['status'=>'error','message'=> __('messages.email_not_exist' ) ]);
        }
        //return view('frontend.homepage');
    }

    public function getResetPasswordForm($token){
        $check=User::where('forget_token','=',$token)->where('status','1')->first();
        if($check){
            return view('frontend.forgotpassword', ['token' => $token,'user_email'=>$check->email]);
        }else{
            Session::flash('error', "Token mismatch please try again");
            return view('frontend.homepage');
        }
    }

    public function resetUserPassword(Request $request){
        $check=User::where('email',$request->email)->where('forget_token',$request->token)->where('status','1')->first();
        if($check){
            $user = User::find($check->id);
            $user->status = 1;
			$user->forget_token = NULL;
            $user->password = bcrypt($request->input('password'));
            $user->save();
            return response()->json(['status'=>'success','message'=> __('messages.reset_success') ]);
        }else{
            return response()->json(['status'=>'error','message'=> __('messages.token_mismatch') ]);
        }
    }

    public function myprofile_update(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            //'email' => 'required',
			'user_image' => 'mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('user/profile')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        { 
            $meta = $request->input('meta');
            $vendor_id = $request->input('id');
            $vendor = User::find($vendor_id);   
            $vendor->first_name = $request->input('first_name');
            $vendor->last_name = $request->input('last_name');
            $vendor->name = $request->input('first_name').' '.$request->input('last_name');
            //$vendor->email = $request->input('email');
            if($vendor->save())
            {
                if ($request->hasFile('user_image'))
                {
                    $data = Helper::fileUpload($request);
                    $media_obj=new Media();
                    $insert_id = $media_obj->addMedia($data);
                    if($insert_id)
                    $meta['profile_photo_id'] = $insert_id;
                }
                $user_meta = new UserMeta();
                foreach($meta as $key=>$value){
                    $user_meta->addUpdate($vendor->id,$key,$value);
                }
                if($request->input('id')){
                    $msg = __('messages.record_updated');
                }else{
                    $msg = __('messages.record_created');
                }
                return redirect('user/profile')->with('success', $msg);
            }else{
                return redirect('user/profile')->with('error', 'Error Please try again.');
            }
        }
    }
	
    public function myprofile_password_update(Request $request){
        $validator = Validator::make($request->all(), [
            'old' => 'required',
            'new1' => 'required',
            'new2' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('user/profile')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        { 
            $user_obj = User::find($request->id);
            if(Hash::check($request->old, $user_obj->password)){
                if($request->new1 == $request->new2){
                    $user_obj->password = Hash::make($request->new1);
                    $user_obj->save();
                    return redirect('user/profile')->with('success', __('messages.reset_success'));
                }else{
                    return redirect('user/profile')->with('error', 'Error Please enter same as confirm password.');
                }
            }else{
                return redirect('user/profile')->with('error', __('messages.current_pass_wrong'));
            }
        }

    }
}
