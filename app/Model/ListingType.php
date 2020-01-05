<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListingType extends Model
{
    //
	public function getListingType($id){
        $type = ListingType::where(array('id' => $id ))->first();
        return $type;
    }
	public function deleteType($id=""){
        ListingType::where('id',$id)->delete();
        return true;
    }

    public static function getAllTypes($type)
    {
    	$type = ListingType::where(array('type'=>$type,'status'=>'1'))->get();
        return $type;
    }

    public static function getAllAmenities($amenities)
    {
        if($amenities!='')
        {
            $type = ListingType::select('id','name')->whereIn('id', explode(',', $amenities))->get();
            return $type;
        }
        return array();
    }

}
