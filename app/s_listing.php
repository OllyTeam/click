<?php

namespace App;
use App\district;
use App\category;

use Illuminate\Database\Eloquent\Model;

class s_listing extends Model
{

	protected $fillable = 
	[
		'service_title',
		'service_desc',
		'category_id',
		'employment_type',
		'sector_id',
		'district_id',
		'province_id',
		'email',
		'phone',
		'language',
		'user_id'
	];

    public function district(){
        return $this->belongsTo('App\district');
    }

    public function category(){
        return $this->belongsTo('App\category');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function province(){
    	return $this->belongsTo('App\province');
    }
}
