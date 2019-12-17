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
use App\Model\UserMeta;
use App\Model\Media;
use App\Model\Listing;
use App\Model\ListingType;
use App\Model\ListingMeta;
use Helper;
use File;
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
        $amenities_type = ListingType::getAmenitiesTypes('amenities');
        $facilities_type = ListingType::getAmenitiesTypes('facilities');
        return view('Frontadmin.listing.add',compact('amenities_type','facilities_type'));
    }

    public function addListing(Request $request)
    {
        if($request->save_as_draft){
            // save as draft
            $listing = new Listing();
            if($request->input('id'))
            {
                $listing_id = $request->input('id');
                $listing = User::find($listing_id);
            }
            $listing->title = $request->input('title');
            $listing->description = $request->input('description');
            $listing->listing_type = $request->input('listing_type');
            $listing->room_type = $request->input('place_type');
            $listing->instant_booking = $request->input('instant_booking');
            $listing->price = $request->input('price');
            $listing->amenities = $request->input('amenities');
            $listing->facilities = $request->input('facilities');
            $listing->added_by = Auth::id();
            $listing->status = '4';
            if($listing->save()){
                $listing_meta = new ListingMeta();
                foreach($request->input('meta') as $key=>$value){
                    $listing_meta->addUpdate($listing->id,$key,$value);
                }
            }

            if($request->input('id')){
                $msg = __('messages.record_updated');
            }else{
                $msg = __('messages.record_created');
            }
            return redirect('user/listing/add')->with('success', $msg);
        }else{
            // save as draft
            // $validator = Validator::make($request->all(), [
            //     'first_name' => 'required',
            //     'email' => 'required'
            // ]);
        }

    }

    public function uploadListingImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'mimes:jpeg,jpg,png,gif|required|dimensions:max_width=1440,max_height=900|max:10000',
        ]);

        if ($validator->fails()) 
        {
            return Response::json(array('status'=> 'error','message'=> $validator->errors()->getMessages()));
        }
        else
        {
            try{
                if ($request->hasFile('image'))
                {
                    $data = Helper::ListingfileUpload($request);
                    $media_obj=new Media();
                    $insert_id = $media_obj->addMedia($data);
                    $response=['path'=>$data['file_path'],'id'=>$insert_id];
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

    public function deleteListingImage(Request $request)
    {
        if($request->id){
            $media_obj=new Media();
            $media_file_obj = $media_obj->getMedia($request->id);
            if($media_file_obj){
                $listing_path = 'upload/media/listing/'.$media_file_obj->file_name;
                if(File::exists($listing_path)) {
                    File::delete($listing_path);
                    Media::where('id',$request->id)->delete();//delete from table also
                }
            }
            return response()->json(['message'=>'deleted successfully']); 
        }
    }
}	