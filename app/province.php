<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{

	protected $fillable = ['name'];



    public function districts(){
        return $this->hasMany('App\district');
    }



    public function Alldata(){
        return $this->hasOne('App\Alldata');
    }
    
}
