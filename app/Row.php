<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    public function cells()
    {
        return $this->hasMany('App\Cell');
    }
}
