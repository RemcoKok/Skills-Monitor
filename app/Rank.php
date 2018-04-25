<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $fillable = ['rankName'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
