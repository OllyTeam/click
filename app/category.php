<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $fillable = 
	[
		'name'
	];


    public function s_listings(){
        return $this->hasMany('App\s_listing');
    }

    public function joboffer(){
        return $this->hasMany('App\joboffer');
    }

    public function Alldata(){
        return $this->hasMany('App\Alldata');
    }
    
}
