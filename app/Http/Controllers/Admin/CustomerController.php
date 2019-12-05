<?php

namespace App\Http\Admin\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Model\UserMeta;
use App\Model\Media;
use App\User;
use DB;
use Response;
use Storage;
use Illuminate\Support\Facades\Config;
use Auth;
use Helper;

class CustomerController extends Controller
{
    public function index(){
    	//Session::flash('success', 'This is Vendor List');
    	return view('Admin.Customer.customer_list');
    }

    public function add(){
    	//Session::flash('error', 'This is New Vendor');
    	return view('Admin.Customer.customer_add');
    }

    public function addUpdateCustomer(Request $request)
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
            return redirect('admin/customer/add')
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
            $vendor->user_role = Config::get('constants.roles.customer'); // take value from constant file
            if($vendor->save())
            {
                $user_meta = new UserMeta();
                foreach($request->input('meta') as $key=>$value){
                    $user_meta->addUpdate($vendor->id,$key,$value);
                }
                if($request->input('id')){
                    $msg = __('messages.record_updated');
                }else{
                    $msg = __('messages.record_created');
                }
                return redirect('admin/customer/list')->with('success', $msg);
            }
        }
    }

    public function getAllCustomers(Request $request)
    {
        try
        {
            $perpage = $request->pagination['perpage'];
            $page = $request->pagination['page']; 

            $query = $request->input('query');
            $search = isset($query['global_search'])?$query['global_search']:"";
            $vendors = new User();
            if($page=='1')
            {
            $offset = 0;
            }
            else{
            $offset = ($page-1)*$perpage;
            }
            $vendors = $vendors->with('getMeta')->leftjoin('user_metas', 'users.id', '=', 'user_metas.user_id')->select('users.*')->where('users.user_role',Config::get('constants.roles.customer') )->groupBy('user_metas.user_id');;

            if($search!=='')
            {
                $vendors->where(function ($query) use($search) {
                    $query->orWhere('users.first_name','like','%'.$search.'%')
                          ->orWhere('users.last_name','like', '%'.$search.'%')
                          ->orWhere('users.email','like','%'.$search.'%')
                          ->orWhere('user_metas.meta_value','like','%'.$search.'%');
                });
            }

            $total = $vendors->count();
            $vendors = $vendors->offset($offset)->limit($perpage)->get();
            $meta = ['perpage'=>$perpage,'total'=>$total,'page'=>$page];
            //$totalRe = $page-1*$perpage;
            foreach($vendors as $key => $value){
                $vendors[$key]['S_No'] = ($offset++)+1;
                if($value->getMeta){
                    foreach($value->getMeta as $k => $v){
                        $vendors[$key][$v->meta_name] = $v->meta_value;
                    }
                }
                unset($vendors[$key]->getMeta);
            }
            return Response::json(array('data'=> $vendors,'meta'=> $meta));
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
        return (json_encode(array('status'=>'error','message'=>$ex->getMessage()))) ;
        }
    }

    public function getCustomerById($id,Request $request){
        $user_obj = new User();
        $user_obj = $user_obj->getUser($id);
		//print_r($user_obj);
        return view('Admin.Customer.customer_add',$user_obj);
    }

    public function deleteCustomerById($id,Request $request){
        $user_obj = new User();
        $user_obj = $user_obj->deleteUser($id);
        return Response::json(array('status'=>'success','message'=>__('messages.record_deleted')));
    }

    public function uploadProfilePic(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);

        if ($validator->fails()) 
        {
            return Response::json(array('status'=> 'error','message'=> $validator->errors()->getMessages()));
        }
        else
        {
            try{
                if ($request->hasFile('user_image'))
                {
                    $data = Helper::fileUpload($request);
                    $media_obj=new Media();
                    $insert_id = $media_obj->addMedia($data);
                    $response=['path'=>$data['file_path'].'/'.$data['file_name'],'id'=>$insert_id];
                    return response()->json($response);
                }
                else
                {
                    return $file_name = "";
                }
                //print_r($_FILES); die;  
            }catch(Exception $ex){
                return redirect()->back();
            }
        }
    }

    public function deleteProfilePic(Request $request)
    {
        if($request->id){
            $media_obj=new Media();
            $media_obj->deleteMedia($request->id);
			UserMeta::where('meta_name',"profile_photo_id")->delete();
            return response()->json(['message'=>'deleted successfully']); 
        }
    }
}
