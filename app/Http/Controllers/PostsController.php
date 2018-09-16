<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\district;
use App\s_listing;
use App\User;
class PostsController extends Controller
{
    //

    public function home() {

        $category = category::orderBy('created_at','ASC')->get(); 

        $district = district::all();

        $service = s_listing::all();

        $user = User::all();

        $data = array(
            ['category' => $category ],
            ['district' => $district ],
            ['service' => $service ]);

        return view('index',['category'=>$category,'district'=>$district,'service'=>$service,'user'=>$user]);
    }
    
    public function contact() {
        return view('contact');
    }

    public function submit() {
        return view('submit');
    }
    
    public function change_password() {
        return view('change_password');
    }
    public function edit_ad() {
        return view('edit_ad');
    }
    public function elements() {
        return view('elements');
    }
    public function faq() {
        return view('faq');
    }

    public function sign_in() {
        return view('sign_in');
    }
    
    public function my_ads() {
        return view('my_ads');
    }
    public function my_profile() {
        return view('my_profile');
    }
    public function listing_grid_4_items() {
        return view('listing_grid_4_items');
    }
    public function listing_grid_compact_full_width() {
        return view('listing_grid_compact_full_width');
    }
    public function listing_grid_compact_sidebar() {
        return view('listing_grid_compact_sidebar');
    }
    public function listing_grid_full_width() {
        return view('listing_grid_full_width');
    }
    public function listing_grid_sidebar() {
        return view('listing_grid_sidebar');
    }
    public function listing_list_compact_full_width() {
        return view('listing_list_compact_full_width');
    }
    public function listing_list_compact_sidebar() {
        return view('listing_list_compact_sidebar');
    }
    public function listing_list_full_width() {
        return view('listing_list_full_width');
    }
    public function listing_list_sidebar() {
        return view('listing_list_sidebar');
    }
    public function old() {
        return view('old');
    }
    public function pricing() {
        return view('pricing');
    }
    public function seller_detail_1() {
        return view('seller_detail_1');
    }
    public function sellers() {
        return view('sellers');
    }
    public function single_listing_2() {
        return view('single_listing_2');
    }
    public function sold_items() {
        return view('sold_items');
    }
    public function register() {
        return view('register');
    }
    
}
