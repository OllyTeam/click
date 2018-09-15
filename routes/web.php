<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\province;
use App\s_listing;
use App\user;
use App\district;
use App\category;
use App\joboffer;
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
Route::post('/search',function(Request $request){

	// $title = $request->input('name');
	// $category = $request->input('category');
	// $district = $request->input('location');
	$title = '%%'.$request->input('keyword').'%%';
	$category = $request->input('category');
	$district = $request->input('location');
	$type = $request->input('type');



	if ($request->input("type") == 1) {

	$results = DB::select('select * from joboffers where offertitle LIKE :title and category_id = :category  and district_id = :district', ['title' => $title,'category'=> $category, 'district' => $district]);

	$dis = district::all();
	$sec = sector::all();
	$cat = category::all();

	return view('search.result',['results'=>$results, 'type'=>$type, 'district'=>$dis,'sector'=>$sec,'category'=>$cat]);
		
	}else{
		
	$results = DB::select('select * from s_listings where service_title LIKE :title and category_id = :category  and district_id = :district', ['title' => $title,'category'=> $category, 'district' => $district])->get();



	return view('search.result',['results'=>$results, 'type'=>$type, 'district'=>$dis,'sector'=>$sec,'category'=>$cat]);

	}

	
});

Route::get('/categorylist/{id}',function($id){
	$category = joboffer::where('category_id',$id)->get();

	return $category;
	
});




Route::get('/service/create','ServiceController@create');

Route::post('','ServiceController@store');

Route::get('/register','PagesController@register');

Route::get('/profile',function(){

	return view('my_profile');
});

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
Route::resource('/sector','SectorController'); //his is the controller for 

Route::post('/dynamicdata.fetch',function(Request $request){

	$select = $request->get('select');
	$value = $request->get('value');
	$dependent = $request->get('dependent');
	$data  = district::where('province_id',$value)->get();

	return Response::json($data);

})->name('dynamicdata.fetch');
