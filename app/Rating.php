<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    protected $fillable = ['name'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function emptyForm(){
        return $this->belongsTo('App\emptyForm', 'emptyForm_id', 'id');
    }

}
