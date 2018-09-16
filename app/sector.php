<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sector extends Model
{

	
    protected $fillable= ['district_id','name'];

    public function district(){
    	return $this->belongsTo('App\district');
    }
}
