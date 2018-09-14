<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class joboffer extends Model
{
     public function category(){
    	return $this->belongsTo('App\category');
    }

    public function province(){
    	return $this->belongsTo('App\province');
    }

    public function User(){
    	return $this->belongsTo('App\User');
    }
}
