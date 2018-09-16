<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\s_listing;

class district extends Model
{
    protected $fillable = ['name'];




    public function s_listing(){
        return $this->hasOne('App\s_listing');
    }

    public function sectors(){
        return $this->hasMany('App\sector');
    }

    public function provinces(){
        return $this->belongsTo('App\province');
    }
    
    public function joboffers(){
        return $this->hasOne('App\joboffer');
    }


}
