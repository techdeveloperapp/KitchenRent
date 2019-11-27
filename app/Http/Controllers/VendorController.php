<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class VendorController extends Controller
{
    public function index(){
    	Session::flash('success', 'This is Vendor List');
    	return view('Admin.Dashboard.vendor_list');
    }

    public function add(){
    	Session::flash('error', 'This is New Vendor');
    	return view('Admin.Dashboard.vendor_add');
    }
}
