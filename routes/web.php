<?php

use App\province;
/*
|__________________________________________________________________________
| Web Routes
|__________________________________________________________________________
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::resource('/register','PagesController');

// Route::get('/', 'PostsController@home');

// Route::get('/submit', 'PostsController@submit');

// Route::get('/contact', 'PostsController@contact');

// Route::get('/change_password', 'PostsController@change_password');

// Route::get('/edit_ad', 'PostsController@edit_ad');

// Route::get('/elements', 'PostsController@elements');

// Route::get('/faq', 'PostsController@faq');

// Route::get('/image_header', 'PostsController@image_header');

// Route::get('/sign_in', 'PagesController@index');

// Route::get('/my_ads', 'PostsController@my_ads');

// Route::get('/my_profile', 'PostsController@y_profile');

// Route::get('/listing_grid_4_items', 'PostsController@listing_grid_4_item');

// Route::get('/listing_grid_compact_full_width', 'PostsController@listing_grid_compact_full_width');

// Route::get('/listing_grid_compact_sidebar', 'PostsController@listing_grid_compact_sidebar');

// Route::get('/listing_grid_full_width', 'PostsController@listing_grid_full_width');

// Route::get('/listing_grid_sidebar', 'PostsController@listing_grid_sidebar');

// Route::get('/listing_list_compact_full_width', 'PostsController@listing_list_compact_full_width');

// Route::get('/listing_list_compact_sidebar', 'PostsController@listing_list_compact_sidebar');

// Route::get('/listing_list_full_width', 'PostsController@listing_list_full_width');

// Route::get('/listing_list_sidebar', 'PostsController@listing_list_sideba');

// Route::get('/old', 'PostsController@old');

// Route::get('/pricing', 'PostsController@pricing');

// Route::get('/seller_detail_1', 'PostsController@seller_detail_1');

// Route::get('/sellers', 'PostsController@sellers');

// Route::get('/single_listing_2', 'PostsController@single_listing_2');

// Route::get('/sold_items', 'PostsController@sold_items');

// Route::get('/register', 'PostsController@register');

// Route::resource('posts','PagesController');

Route::get('/dashboard',function(){

    return view('dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/province','ProvinceController');
Route::resource('/district','DistrictController');

//Auth::routes();

//Route::get('/my_profile', 'HomeController@index');
