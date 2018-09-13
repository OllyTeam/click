<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\province;
use App\s_listing;
use App\user;
use App\district;
use App\sector;
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




Route::get('/register','PagesController@register');

Route::get('/', 'PostsController@home');


Route::resource('posts','PagesController');

Route::get('/dashboard',function(){

    return view('dashboard');
});

Route::get('/single/{id}',function($id){

    $service = s_listing::find($id);

    return view('single_listing_2')->with('service',$service);
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/province','ProvinceController');  //this is the route for all province
Route::resource('/district','DistrictController');  //this is the route for all district
Route::resource('/category','CategoryController'); //this is the route for all category
Route::resource('/offer','OfferController'); // this is the Route for all offers
Route::get('/contact','PostsController@contact');
Route::resource('/sector','SectorController');









Route::post('/dynamicdata.fetch',function(Request $request){  //ajx retrieving all district based on

	$select = $request->get('select');
	$value = $request->get('value');
	$dependent = $request->get('dependent');
	$data  = district::where('province_id',$value)->get();

	return Response::json($data);

})->name('dynamicdata.fetch');


Route::post('/dynamicdata2.fetch',function(Request $request){  //ajx retrieving all sector based on

	$value2 = $request->get('value2');
	$data  = sector::where('district_id',$value2)->get();

	return Response::json($data);

})->name('dynamicdata2.fetch');
