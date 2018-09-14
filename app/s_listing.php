<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class s_listing extends Model
{
    public function district(){
        return $this->belongsTo('App\district');
    }

    public function category(){
        return $this->belongsTo('App\category');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }
}
