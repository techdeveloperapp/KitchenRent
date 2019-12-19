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
	public function index(){
		return view('Frontadmin.listing.index');
	}
    public function add()
    {
        $amenities_type_arr = ListingType::getAllTypes('amenities');
        $facilities_type_arr = ListingType::getAllTypes('facilities');
        $room_type_arr = ListingType::getAllTypes('room');
        $list_type_arr = ListingType::getAllTypes('listing');
        return view('Frontadmin.listing.add',compact('list_type_arr','room_type_arr','amenities_type_arr','facilities_type_arr'));
    }

    public function addListing(Request $request)
    {
       //dd($request->all);
        if($request->save_as_draft){
            // save as draft
            $listing = new Listing();
            if($request->input('id'))
            {
                $listing_id = $request->input('id');
                $listing = Listing::find($listing_id);
            }
            $listing->title = $request->input('title');
            $listing->description = $request->input('description');
            $listing->listing_type = $request->input('listing_type');
            $listing->room_type = $request->input('place_type');
            $listing->instant_booking = $request->input('instant_booking');
            $listing->price = $request->input('price');
            $listing->amenities = (!is_null($request->input('amenities')))?implode(',',$request->input('amenities')):'0';
            $listing->facilities = (!is_null($request->input('facilities')))?implode(',',$request->input('facilities')):'0';
            $listing->added_by = Auth::id();
            $listing->status = '4';
            if($listing->save()){
                $listing_meta = new ListingMeta();
				$timeslot_enable = (array_key_exists('timeslot_enable' ,$request->input('meta')))?'1':'0';
				$mon_fri_closed = (array_key_exists('mon_fri_closed' ,$request->input('meta')))?'1':'0';
				$sat_closed		= (array_key_exists('sat_closed' ,$request->input('meta')))?'1':'0';
				$sun_closed		= (array_key_exists('sun_closed' ,$request->input('meta')))?'1':'0';
				$meta = $request->input('meta');
				$meta['timeslot_enable'] = $timeslot_enable;
				$meta['mon_fri_closed']  = $mon_fri_closed;
				$meta['sun_closed']      = $sun_closed;
				//print_r($meta);exit;
                foreach($meta as $key=>$value){
					
                    if($key == "timeslot"){
                        $value = json_encode($value);
                    }
					if($key == "listing_image_ids"){
                        $value = implode(',',$value);
                    }
                    if($key == "gig_accomodation"){
                        $value = json_encode($value);
                    }
					if($key == "gig_services"){
                        $value = json_encode($value);
                    }
                    $listing_meta->addUpdate($listing->id,$key,$value);
                }
            }

            if($request->input('id')){
                $msg = __('messages.record_updated');
				return redirect('user/listing/edit/'.$listing_id)->with('success', $msg);
            }else{
                $msg = __('messages.record_created');
				return redirect('user/listing/index')->with('success', $msg);
            }
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
            'image' => 'mimes:jpeg,jpg,png,gif|required|dimensions:min_width=1440,min_height=900|max:10000',
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
                if(File::exists($listing_path)){
                    File::delete($listing_path);
                    Media::where('id',$request->id)->delete();//delete from table also
                }
            }
            return response()->json(['message'=>'deleted successfully']); 
        }
    }

    public function editListing(Request $request,$id)
    {
        $listing = new Listing();
		
        $listing = $listing->with('getMeta')->where('id',$id)->first()->toArray();
        $amenities_type = ListingType::getAllTypes('amenities');
        $facilities_type = ListingType::getAllTypes('facilities');
        $room_type = ListingType::getAllTypes('room');
        $list_type = ListingType::getAllTypes('listing');
        foreach ($listing['get_meta'] as $key => $value) {
            if($value['meta_name'] == "timeslot"){
                $listing['timeslot'] = json_decode($value['meta_value']);
            }elseif($value['meta_name'] == "gig_accomodation"){
                $listing['gig_accomodation'] = json_decode($value['meta_value']);
            }elseif($value['meta_name'] == "gig_services"){
                $listing['gig_services'] = json_decode($value['meta_value']);
            }else{
				$listing[$value['meta_name']] = $value['meta_value'];
			}
        }
        unset($listing['get_meta']);
        $listing['list_type_arr'] = $list_type;
        $listing['room_type_arr'] = $room_type;
        $listing['amenities_type_arr'] = $amenities_type;
        $listing['facilities_type_arr'] = $facilities_type;
        //dd($listing);
		//print_r($listing);
        return view('Frontadmin.listing.add',$listing);
    }
}	