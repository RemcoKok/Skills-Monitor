<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['name'];
  
    public function user_assessor(){
        return $this->belongsTo('App\User', 'users_id_assessor', 'id');
    }

    public function user_rated(){
        return $this->belongsTo('App\User', 'users_id_rated', 'id');
    }

    public function emptyForm(){
        return $this->belongsTo('App\emptyForm', 'emptyForm_id', 'id');
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
