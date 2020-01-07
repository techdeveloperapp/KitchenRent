<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use Illuminate\Support\Facades\Config;
use Notification;
use Response;
use Mail;
use Session;
use App\Model\Media;
use Helper;
use File;
use Hash;

class MessagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
	public function lists(){
		
		//return view('Admin.Messages.lists');
		return view('Frontadmin.messages.lists');
	}
	public function view(Request $request,$userName){
		//return view('Admin.Messages.view');
		return view('Frontadmin.messages.view');
	}
}	