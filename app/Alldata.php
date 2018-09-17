<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alldata extends Model
{
    public function category(){
    	return $this->belongsTo('App\category');
    }

    public function district(){
    	return $this->belongsTo('App\district');
    }

    public function province(){
    	return $this->belongsTo('App\province');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
