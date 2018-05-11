<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmptyForm extends Model
{
    public function competence() {
        $this->belongsTo('App\Competence', 'competence_id', 'id');
    }    
}
