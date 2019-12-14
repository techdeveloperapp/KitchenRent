<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Model\UserMeta;
use App\Model\Media;
use App\Model\ListingType;
use App\User;
use DB;
use Response;
use Storage;
use Illuminate\Support\Facades\Config;
use Auth;
use Helper;

class AdminListingController extends Controller
{	
	public function listing_type(){
    	return view('Admin.Listing.listing_type');
    }
	public function add_listing_type(Request $request){
		
		$ListingType = new ListingType();
		$validator_params = 'required|unique:listing_types';
		if($request->input('id'))
		{
			$validator_params = 'required';
			$id = $request->input('id');
			$ListingType = ListingType::find($id);
			if( $request->input('name')!= $ListingType->name ){
				$validator_params = 'required|unique:listing_types';
			}
		}
		
		$validator = Validator::make($request->all(), [
            'name' => $validator_params,
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'error','message'=> $validator->errors()->first('name') ]);
        }
        else
        {
			$ListingType->name = $request->input('name');
			$ListingType->status = $request->input('status');
			$ListingType->added_by = Auth::id();
			if($ListingType->save()){
				if($request->input('id')){
                    $msg = __('messages.record_updated');
                }else{
                    $msg = __('messages.record_created');
                }
				return response()->json(['status'=>'success','message'=> $msg]);
			}
		}
    }
	 public function getAllTypes(Request $request)
    {
        try
        {
            $perpage = $request->pagination['perpage'];
            $page = $request->pagination['page']; 

            $query = $request->input('query');
            $search = isset($query['global_search'])?$query['global_search']:"";
            $ListingType = new ListingType();
            if($page=='1')
            {
            $offset = 0;
            }
            else{
            $offset = ($page-1)*$perpage;
            }

            if($search!=='')
            {
                $ListingType->where(function ($query) use($search) {
                    $query->orWhere('listing_types.name','like','%'.$search.'%');
                });
            }

            $total = $ListingType->count();
            $ListingType = $ListingType->offset($offset)->limit($perpage)->get();
            $meta = ['perpage'=>$perpage,'total'=>$total,'page'=>$page];
            //$totalRe = $page-1*$perpage;
            
            return Response::json(array('data'=> $ListingType,'meta'=> $meta));
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
        return (json_encode(array('status'=>'error','message'=>$ex->getMessage()))) ;
        }
    }
	public function deleteListingTypeById($id, Request $request){
		$ListingType = new ListingType();
        $ListingType = $ListingType->deleteType($id);
        return Response::json(array('status'=>'success','message'=>__('messages.record_deleted')));
	}
	
}