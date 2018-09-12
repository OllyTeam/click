<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function s_listing(){
        return $this->hasOne('App\s_listing');
    }
}
