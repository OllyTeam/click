<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\district;
use Illuminate\Support\Facades\DB;

class dynamicdata extends Controller
{

    public function fetch(Request $request)
    {



    	$select = $request->get('select');
    	$value = $request->get('value');
    	$dependent = $request->get('dependent');
    	$data = district::where('province_id',$value)->get();

    	$output = '<option value=""> Select '.ucfirst($dependent).'</option>';

    	foreach ($data as $value) {
    		$output .='<option value="'.$value->id.'">'.$value->name.'</option>';
    	}

        echo $output;
    }







}
