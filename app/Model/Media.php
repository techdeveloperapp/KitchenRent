<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function addMedia($data){
    	$id = Media::insertGetId($data);
    	return $id;
    }

    public function getMedia($id){
        $media = Media::where('id',$id)->first();
        return $media;
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
    public static function getAllImages($media_ids)
    {
        if($media_ids!='')
        {
            $images = Media::select('id','file_name','file_path')->whereIn('id', explode(',', $media_ids))->get();
            if($images->count()>0)
            {
                return $images;
            }
            else
            {
                return array();
            }
        }
        return array();
    }
}
