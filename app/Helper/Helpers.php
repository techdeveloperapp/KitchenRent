<?php
namespace App\Helper;
use Response;
use Auth;
use Storage;
use Illuminate\Support\Facades\Config;
use App\Model\UserMeta;
use App\Model\Media;
 
class Helpers {
    /*
    * @created : Dec 04, 2019
    * @access  : public
    * @Purpose : This function is used to upload image and files
    * @params  : file and path
    * @return  : upload image and return file data.
    */
    public static function fileUpload($request) {
        $image = $request->file('user_image');
        $folder_path = 'upload/media/profile';
	    $path = url($folder_path);
	    $filename = time() . '.' . $image->getClientOriginalExtension();
	    $filesize=$image->getClientSize() / 1024;
	    $image->move($folder_path, $filename);
	    $data = ['file_name'=>$filename,'server_path'=>$folder_path.'/'.$filename,'mime_type'=>$image->getClientMimeType(),'file_path'=>$path.'/'.$filename,'file_size'=>$filesize,'added_by'=>Auth::id()];
	    return $data;
    }
	/*
    * @created : Dec 11, 2019
    * @access  : public
    * @Purpose : This function is used to get meta value
    * @params  : user_id and meta_name
    * @return  : return meta value if exists otherwise false.
    */
	public static function get_user_meta($user_id , $meta_name){
		$user_meta = UserMeta::where(array('user_id' => $user_id, 'meta_name' => $meta_name ))->first();
		if( ! is_null($user_meta)){
			return $user_meta->meta_value;
		}
		return false;
	}
	/*
    * @created : Dec 11, 2019
    * @access  : public
    * @Purpose : This function is used to get attachement url
    * @params  : attachment_id
    * @return  : return file url if exists otherwise false.
    */
	public static function get_attachment_by_id($attachment_id){
		$media = Media::where(array('id' => $attachment_id ))->first();
		if( ! is_null($media)){
			return $media->file_path;
		}
		return false;
	}
	/*
    * @created : Dec 11, 2019
    * @access  : public
    * @Purpose : This function is used to get user profile photo
    * @params  : user_id (optional)
    * @return  : return file url if exists otherwise false.
    */
	public static function get_user_profile_image($user_id = ''){
		if( !$user_id && $user_id ==''){
			$user_id = Auth::id();
		}
		$attachement_id = self::get_user_meta($user_id , 'profile_photo_id');
		return self::get_attachment_by_id($attachement_id);
	}
}