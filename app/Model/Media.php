<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function addMedia($data){
    	$id = Media::insertGetId($data);
    	return $id;
    }

    public function deleteMedia($id){
    	$check = Media::where('id',$id)->first();
    	if($check){
    		unlink($check->file_path);
    		Media::where('id',$check->id)->delete();
    	}else{
    		return false;
    	}
    	return true;
    }
}
