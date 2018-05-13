<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmptyForm extends Model
{

    public function competence() {
        $this->belongsTo('App\Competence', 'competence_id', 'id');
    }    
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'competence_id'];

    public function rows()
    {
        return $this->hasMany('App\Row');
    }

}
