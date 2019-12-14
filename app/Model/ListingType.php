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
}
