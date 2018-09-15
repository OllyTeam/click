<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function s_listing(){
        return $this->hasMany('App\s_listing');
    }

    public function joboffer(){
        return $this->hasMany('App\joboffer');
    }
}
