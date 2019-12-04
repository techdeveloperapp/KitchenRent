<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\UserMeta;
use App\Model\Media;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getVendor($id=""){
        $userArr = [];
        $user = User::select('first_name', 'last_name' ,'name','email')->where('id',$id)->first();
        if($user){
            $user_meta = UserMeta::where('user_id',$id)->get();
            $userArr['id'] = $id;
            $userArr['first_name'] = $user->first_name;
            $userArr['last_name'] = $user->last_name;
            $userArr['name'] = $user->name;
            $userArr['email'] = $user->email;
            foreach($user_meta as $key=>$value){
               $userArr[$value->meta_name] = $value->meta_value;
               if($value->meta_name=="profile_photo_id"){
                $media = Media::where('id',$value->meta_value)->first();
                if($media)
                $userArr['view_profile_image'] = $media->file_path;
                $userArr['file_name'] = $media->file_name;
                $userArr['server_path'] = $media->server_path;
               }
            }
        }
        return $userArr;
    }

    public function deleteVendor($id=""){
        UserMeta::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        return true;
    }

    public function getMeta(){
        return $this->hasMany("App\Model\UserMeta", "user_id", "id");
    }
}
