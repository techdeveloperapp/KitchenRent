<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Model\UserMeta;
use App\User;
use DB;
use Response;
use Illuminate\Support\Facades\Config;

class VendorController extends Controller
{
    public function index(){
    	//Session::flash('success', 'This is Vendor List');
    	return view('Admin.Dashboard.vendor_list');
    }

    public function add(){
    	//Session::flash('error', 'This is New Vendor');
    	return view('Admin.Dashboard.vendor_add');
    }

    public function addUpdateVendor(Request $request)
    {
        if(isset($request->id) && $request->id){
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'email' => 'required'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'email' => 'email|unique:users',
                'password' => 'required',
            ]);
        }

        if ($validator->fails()) {
            return redirect('admin/vendor/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
        	$vendor = new User();
            if($request->input('id'))
            {
                $vendor_id = $request->input('id');
                $vendor = User::find($vendor_id);
            }
            $vendor->first_name = $request->input('first_name');
            $vendor->last_name = $request->input('last_name');
            $vendor->name = $request->input('first_name').' '.$request->input('last_name');
            $vendor->email = $request->input('email');
            $vendor->password = bcrypt($request->input('password'));
            $vendor->user_role = Config::get('constants.roles.vendor'); // take value from constant file
            if($vendor->save())
            {
                $user_meta = new UserMeta();
                foreach($request->input('meta') as $key=>$value){
                    $user_meta->addUpdate($vendor->id,$key,$value);
                }
                if($request->input('id')){
                    $msg = 'Vendor updated successfully';
                }else{
                    $msg = 'Vendor added successfully';
                }
                return redirect('admin/vendor/list')->with('success', $msg);
            }
        }
    }

    public function getAllVendors(Request $request)
    {
        try
        {
            $perpage = $request->pagination['perpage'];
            $page = $request->pagination['page'];
            $vendors = new User();
            if($page=='1')
            {
            $offset = 0;
            }
            else{
            $offset = ($page-1)*$perpage;
            }
            DB::statement(DB::raw('set @rownumber='.$offset.''));
            $vendors = $vendors->where('users.user_role',Config::get('constants.roles.vendor') );

            $total = $vendors->count();
            $vendors = $vendors->offset($offset)->limit($perpage)->get();
            $meta = ['perpage'=>$perpage,'total'=>$total,'page'=>$page];
            return Response::json(array('data'=> $vendors,'meta'=> $meta));
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
        return (json_encode(array('status'=>'error','message'=>$ex->getMessage()))) ;
        }
    }

    public function getVendorById($id,Request $request){
        $user_obj = new User();
        $user_obj = $user_obj->getVendor($id);
        return view('Admin.Dashboard.vendor_add',$user_obj);
    }

    public function deleteVendorById($id,Request $request){
        $user_obj = new User();
        $user_obj = $user_obj->deleteVendor($id);
        return redirect('admin/vendor/list')->with('success', 'Vendor deleted successfully.');
    }
}
