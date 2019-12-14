<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListingMeta extends Model
{
    public function addUpdate($listing_id="",$key="",$value=""){
    	if($value!='')
    	{
	    	$check = ListingMeta::where(['listing_id'=>$listing_id,'meta_name'=>$key])->first();
	    	if($check){
	    		ListingMeta::where('id',$check->id)->update(['meta_value'=>$value]);
	    	}else{
	    		ListingMeta::insert(['listing_id'=>$listing_id,'meta_name'=>$key,'meta_value'=>$value]);
	    	}
	    }
    	return true;
    }
}
