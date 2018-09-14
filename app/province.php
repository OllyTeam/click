<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    public function district(){
        return $this->hasMany('App\district');
    }

    // public function joboffer(){
    //     return $this->hasMany('App\joboffer');
    // }
}
