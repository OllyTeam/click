<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class joboffer extends Model
{



    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function User(){
    	return $this->belongsTo('App\User');
    }

    public function district(){
    	return $this->belongsTo('App\District');
    }
    public function province(){
    	return $this->belongsTo('App\Province');
    }

    public function s_listings()
    {
        return $this->hasMany('App\s_listing');
    }
}
