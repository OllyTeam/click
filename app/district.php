<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $fillable = ['name'];




    public function s_listing(){
        return $this->hasMany('App\s_listing');
    }

    public function sector(){
        return $this->hasMany('App\sector');
    }
}
