<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserMeta extends Model
{
    public function addUpdate($user_id="",$key="",$value=""){
    	$check = UserMeta::where(['user_id'=>$user_id,'meta_name'=>$key])->first();
    	if($check){
    		UserMeta::where('id',$check->id)->update(['meta_value'=>$value]);
    	}else{
    		UserMeta::insert(['user_id'=>$user_id,'meta_name'=>$key,'meta_value'=>$value]);
    	}
    	return true;
    }
}
