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
use App\Model\Listing;
use App\Model\ListingMeta;
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
            $listing->place_type = $request->input('place_type');
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
}	