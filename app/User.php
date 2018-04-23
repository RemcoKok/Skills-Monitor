<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function rank(){
        return $this->belongsTo('App\Rank','rank_id');
    }

    public function hasrank($title){
        $user_role = $this->role();
        if(!is_null($user_role)){
            $user_role = $user_role->role_name; //here is the problem with role_name

        }
        return ($user_role===$title)?true:false;
    }
}
