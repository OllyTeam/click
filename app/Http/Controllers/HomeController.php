<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\joboffer;
use Illuminate\Support\Facades\DB;
use App\district;
use App\province;
use App\sector;
use App\category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('status','!=','1')->count();
        if( Auth()->User()->status == 1 ){
            return view('dashboard')->with('user', $user);
        }else{

            $dis = district::all();
            $pro = province::all();
            $cat = category::all();
            $id = Auth()->user()->id;
            $offer = joboffer::where('user_id','=',$id)->get();
                return view('offer.index')->with('offer',$offer);
        }

        
    }
}
