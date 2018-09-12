<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class district extends Model
{
    protected $fillable = ['name'];




    public function s_listing(){
        return $this->hasOne('App\s_listing');
    }

    public function sector(){
        return $this->hasMany('App\sector');
    }

    public function province(){
        return $this->belongsTo('App\province');
    }


}
