<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ListingMeta;
use App\Model\Media;

class Listing extends Model
{
    public function getListing($id=""){
        $listingArr = [];
        $listing = Listing::where('id',$id)->first();
        if($listing){
            $listing_meta = ListingMeta::where('listing_id',$id)->get();
            $listingArr['id'] = $id;
            foreach($listing as $list_key=>$list_value){
            	$listingArr[$list_key] = $list_value;
            }
            foreach($listing_meta as $key=>$value){
               $listingArr[$value->meta_name] = $value->meta_value;
               if($value->meta_name=="profile_photo_id"){
                $media = Media::where('id',$value->meta_value)->first();
                if( !is_null( $media ) ){
					$listingArr['view_profile_image'] = $media->file_path;
					$listingArr['file_name'] = $media->file_name;
					$listingArr['server_path'] = $media->file_path;
				}
               }
            }
        }
        return $listingArr;
    }

    public function deleteListing($id=""){
        ListingMeta::where('listing_id',$id)->delete();
        Listing::where('id',$id)->delete();
        return true;
    }

    public function getMeta(){
        return $this->hasMany("App\Model\ListingMeta", "listing_id", "id");
    }
}
