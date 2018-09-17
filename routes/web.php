<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\province;
use App\s_listing;
use App\user;
use App\district;
use App\category;
use App\Alldata;
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
Route::resource('/province','ProvinceController'); // route for province

Route::resource('/district','DistrictController'); // route for district

Route::resource('/sector','SectorController');  //route for sector

Route::resource('/offer','OfferController');	//Route for offer

Route::resource('/category','CategoryController');  //Route for category


Route::post('/search',function(Request $request){

	$title = '%%'.$request->input('keyword').'%%';
	$category = $request->input('category');
	$district = $request->input('location');
	$type = $request->input('type');



	if ($request->input("type") == 1) {

	$results = Alldata::where('category_id',$category)->where('district_id',$district)
							                          ->where('type',1)
							                          ->where('title','LIKE',$title)
							                          ->get(); 

	return $results;

	// DB::select('select * from joboffers where offertitle LIKE :title and category_id = :category  and district_id = :district', ['title' => $title,'category'=> $category, 'district' => $district]);


	// return view('search.result',['results'=>$results, 'type'=>$type, 'district'=>$dis,'sector'=>$sec,'category'=>$cat]);

	}else{

	
	$results = Alldata::where('category_id',$category)->where('district_id',$district)
													  ->where('type',2)
													  ->where('title','LIKE',$title)
													  ->get(); 
	return $results;
	//return view('search.result',['results'=>$results, 'type'=>$type, 'district'=>$dis,'sector'=>$sec,'category'=>$cat]);

	}

	
});

Route::get('/categorylist/{id}',function($id){
 
	$category = Alldata::where('category_id',$id)->get();

	return view('category')->with('service',$category);
	
});




//Route::get('/service/create','ServiceController@create');

Route::resource('/service','ServiceController');

Route::get('/register','PagesController@register');

Route::get('/profile',function(){

	return view('my_profile');
});

Route::get('/', 'PostsController@home');


// Route::resource('posts','PagesController');

Route::get('/dashboard',function(){

    return view('dashboard');
});



Route::get('/single/{id}',function($id){
	$pro = province::all();
	$dis = district::all();
	$sec = sector::all();
	$cat = category::all();
	$user = App\User::all();

    $service = Alldata::find($id);

    return view('single_listing_2')->with(['service'=>$service,'district'=>$dis, 'sector'=>$sec,'province'=>$pro, 'user'=>$user, 'category'=>$cat]);
});


Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')->middleware('verified'); // route for login


Route::post('/dynamicdata.fetch','dynamicdata@fetch')->name('dynamicdata.fetch');


