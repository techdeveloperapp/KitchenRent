<?php
namespace App\Helper;
use Response;
use Auth;
use Storage;
use Illuminate\Support\Facades\Config;
 
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
}