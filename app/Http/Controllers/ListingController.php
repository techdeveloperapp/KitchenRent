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
	public function index(Request $request){
        $getAllList = new Listing();
        $getAllList = $getAllList->with('getMeta')->leftjoin('listing_metas', 'listing_metas.listing_id', '=', 'listings.id')->leftjoin('listing_types', 'listing_types.id', '=', 'listings.listing_type')->select('listings.id as listing_id','listing_metas.*','listings.*','listing_types.name as category_name')->orderBy('listings.id', 'desc')->groupBy('listing_metas.listing_id')->paginate(5);

        //echo $getAllList->links(); die;

        foreach($getAllList as $key => $value){
            if($value->getMeta){
                foreach($value->getMeta as $k => $v){
                    if($v->meta_name == "listing_image_ids"){
                        $getAllList[$key][$v->meta_name] = $v->meta_value;
                        if(is_array(explode(',',$v->meta_value))){
                            if(isset(explode(',',$v->meta_value)[0])){
                                $media = new Media();
                                $media = $media->getMedia(explode(',',$v->meta_value)[0]);
                                $getAllList[$key][$v->meta_name] = $media['file_path'];
                            }
                        }
                    }else{
                        $getAllList[$key][$v->meta_name] = $v->meta_value;   
                    }
                }
            }
            unset($getAllList[$key]->getMeta);
        }
		return view('Frontadmin.listing.index')->with('getAllList', $getAllList);
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

		$validator = Validator::make($request->all(), [
			'title' => 'required',
			'slug'  => 'required',
			//'price' => 'required|numeric',
		]);
		if ($validator->fails()) {
			if($request->input('id')){
				return redirect('user/listing/edit/'.$request->input('id'))
                        ->withErrors($validator)
                        ->withInput();
			}
            return redirect('user/listing/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        //dd($request->all());
        if($request->save_as_draft){
            // save as draft
            $listing = new Listing();
            if($request->input('id'))
            {
                $listing_id = $request->input('id');
                $listing = Listing::find($listing_id);
            }
            $listing->title = $request->input('title');
			$slug = $request->input('slug');
			if( !isset($slug) || $slug == '' ){
				$slug = $this->slugify($listing->title);
			}
            $listing->slug  = $slug;
            $listing->description = $request->input('description');
            $listing->listing_type = $request->input('listing_type');
            $listing->room_type = $request->input('place_type');
            $listing->instant_booking = $request->input('instant_booking');
            $listing->price = $request->input('price');
            $listing->amenities = (!is_null($request->input('amenities')))?implode(',',$request->input('amenities')):'0';
            $listing->facilities = (!is_null($request->input('facilities')))?implode(',',$request->input('facilities')):'0';
            $listing->added_by = Auth::id();
            $listing->status = '4';
            if($request->save_as_draft=='2')
            {
                $listing->status = '2';//pending
            }
            if($listing->save()){
                $listing_meta = new ListingMeta();
				$timeslot_enable = (array_key_exists('timeslot_enable' ,$request->input('meta')))?'1':'0';
				$mon_fri_closed = (array_key_exists('mon_fri_closed' ,$request->input('meta')))?'1':'0';
				$sat_closed		= (array_key_exists('sat_closed' ,$request->input('meta')))?'1':'0';
				$sun_closed		= (array_key_exists('sun_closed' ,$request->input('meta')))?'1':'0';

                $mon_closed_slot     = (array_key_exists('mon_closed_slot' ,$request->input('meta')))?'1':'0';
                $tue_closed_slot     = (array_key_exists('tue_closed_slot' ,$request->input('meta')))?'1':'0';
                $wed_closed_slot     = (array_key_exists('wed_closed_slot' ,$request->input('meta')))?'1':'0';
                $thu_closed_slot     = (array_key_exists('thu_closed_slot' ,$request->input('meta')))?'1':'0';
                $fri_closed_slot     = (array_key_exists('fri_closed_slot' ,$request->input('meta')))?'1':'0';
                $sat_closed_slot     = (array_key_exists('sat_closed_slot' ,$request->input('meta')))?'1':'0';
                $sun_closed_slot     = (array_key_exists('sun_closed_slot' ,$request->input('meta')))?'1':'0';

				$meta = $request->input('meta');
				$meta['timeslot_enable'] = $timeslot_enable;
				$meta['mon_fri_closed']  = $mon_fri_closed;
				$meta['sat_closed']      = $sat_closed;
				$meta['sun_closed']      = $sun_closed;

                $meta['mon_closed_slot']      = $mon_closed_slot;
                $meta['tue_closed_slot']      = $tue_closed_slot;
                $meta['wed_closed_slot']      = $wed_closed_slot;
                $meta['thu_closed_slot']      = $thu_closed_slot;
                $meta['fri_closed_slot']      = $fri_closed_slot;
                $meta['sat_closed_slot']      = $sat_closed_slot;
                $meta['sun_closed_slot']      = $sun_closed_slot;                
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
				return redirect('user/listing')->with('success', $msg);
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
            if($request->listing_id)
            {
                ListingMeta::UpdateListingImages($request->listing_id,'listing_image_ids',$request->id);
            }
			$msg = __('messages.record_deleted');
            return response()->json(['status'=>"success",'message'=> $msg]);
        }
    }

    public function editListing(Request $request,$id)
    {
        $listing = new Listing();
        $listing = $listing->with('getMeta')->where('id',$id)->first();
        if($listing){
            $listing = $listing->toArray();
        }else{
            return view('errors.404');
        }
        $amenities_type = ListingType::getAllTypes('amenities');
        $facilities_type = ListingType::getAllTypes('facilities');
        $room_type = ListingType::getAllTypes('room');
        $list_type = ListingType::getAllTypes('listing');
        foreach ($listing['get_meta'] as $key => $value) {
            if($value['meta_name'] == "gig_services"){
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
	public function deleteListing(Request $request){
		if($request->listing_id){
			$listing = new Listing();
			$listing->deleteListing($request->listing_id);
			$msg = __('messages.record_deleted');
			return response()->json(['status'=>"success",'message'=> $msg  ]); 
		}
	}
	public function listingSlug(Request $request){
		$slug =  $this->slugify($request->title);
		return response()->json(['status'=>"success",'slug'=> $slug ]); 
	}
	public function view(Request $request,$slug){
		$listingObj = new Listing();
        $listing = $listingObj->with('getMeta')->where('slug',$slug)->first();
		if($listing){
            $listingMeta = $listingObj->getListing($listing->id);
            $listing = array_merge($listing->toArray(),$listingMeta);

            $amenities_type = ListingType::getAllTypes('amenities');
            
            $facilities_type = ListingType::getAllTypes('facilities');
            $room_type = ListingType::getAllTypes('room');
            $list_type = ListingType::getAllTypes('listing');
            unset($listing['get_meta']);
        }else{
            return view('errors.404');
        }
        
		return view('Frontend.listing.view',$listing);
	}
	private function slugify($text)
	{
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  // trim
	  $text = trim($text, '-');

	  // remove duplicate -
	  $text = preg_replace('~-+~', '-', $text);

	  // lowercase
	  $text = strtolower($text);

	  if (empty($text)) {
		return 'n-a';
	  }

	  return $text;
	}
}	