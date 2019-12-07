<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class DashboardController extends Controller
{
    public function index(){
    	$user = Auth::user();
    	if($user->user_role!='1')
      	{
      		Auth::logout();
      		Session::flash('login_error', "Credential not match please try again");
      		return redirect('/admin');
      	}
    	return view('Admin.Dashboard.dashboard');
    }
}
