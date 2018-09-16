<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{

	protected $fillable = ['name']; 
    public function district(){
        return $this->hasMany('App\district');
    }

    // public function joboffer(){
    //     return $this->hasMany('App\joboffer');
    // }

    public function joboffer(){
        return $this->hasOne('App\joboffer');
    }
}
