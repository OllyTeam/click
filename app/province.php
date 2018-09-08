<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    public function district(){
        return $this->hasMany('App\district');
    }

    public function sector(){
        return $this->hasMany('App\sector');
    }
}
