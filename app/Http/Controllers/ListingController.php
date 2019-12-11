<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use Illuminate\Support\Facades\Config;
use Notification;
use Mail;
use Session;
use App\Model\UserMeta;
use App\Model\Media;
use Helper;
use Hash;

class ListingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function add()
    {
        return view('Frontadmin.listing.add');
    }
}	