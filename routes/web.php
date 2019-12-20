<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use DB;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Frontend'], function() {
	Route::get('/', 'HomeController@index')->name('frontend.index');
	Route::get('appointment_form', 'HomeController@appointment_form')->name('frontend.appointment_form');
	// Route::get('blogs_detail', 'HomeController@blogs_detail')->name('frontend.blogs_detail');
	Route::get('{id}/blogs_detail', 'HomeController@blogs_detail')->name('frontend.blogs_detail');
	// Route::get('/', 'HomeController@locations')->name('frontend.index');
	Route::get('{id}/press_release_details', 'HomeController@press_release_details')->name('frontend.press_release_details');
	Route::get('blogs', 'HomeController@blogs')->name('frontend.blogs');
	Route::get('compare_health_assessments', 'HomeController@compare_health_assessments')->name('frontend.compare_health_assessments');
	Route::get('contact', 'HomeController@contact')->name('frontend.contact');
	// Route::get('gp_services', 'HomeController@gp_services')->name('frontend.gp_services');
	Route::get('health_assessments', 'HomeController@health_assessments')->name('frontend.health_assessments');
	Route::get('management_team', 'HomeController@management_team')->name('frontend.management_team');
	Route::get('men_health', 'HomeController@men_health')->name('frontend.men_health');
	Route::get('{id}/menhealth_detail', 'HomeController@menhealth_detail')->name('frontend.men_health');
	Route::get('mini_pharmacies', 'HomeController@mini_pharmacies')->name('frontend.mini_pharmacies');
	Route::get('our_doctors', 'HomeController@our_doctors')->name('frontend.our_doctors');
	Route::get('/our_doctors', 'HomeController@our_doctors');
	Route::get('press_release_details', 'HomeController@press_release_details')->name('frontend.press_release_details');
	Route::get('press_release', 'HomeController@press_release')->name('frontend.press_release'); 
	Route::get('privacy_policy', 'HomeController@privacy_policy')->name('frontend.privacy_policy');
	Route::get('whyus', 'HomeController@whyus')->name('frontend.whyus');
	Route::get('women_health', 'HomeController@women_health')->name('frontend.women_health');
	Route::get('{id}/newsblog', 'HomeController@newsblog')->name('frontend.press_release');
	Route::get('{id}/services', 'HomeController@services')->name('frontend.gp_services');
	Route::get('{id}/location_detail', 'HomeController@location_detail')->name('frontend.location_detail');
});

Route::group(['prefix'=>'admin'],function(){
	Route::get('/', function () {
		return redirect('admin/login');
	});
	Auth::routes();
	Route::group(['namespace' => 'Backend'],function(){
		Route::resource('category', 'CategoryController');
		Route::delete('media/{id}', 'MediaController@destroy');
		Route::resource('blog', 'BlogController');
		Route::resource('service','ServiceController');
		Route::resource('location', 'LocationController');
		Route::resource('doctor', 'DoctorController');
		Route::resource('whyus', 'WhyusController');
		Route::resource('partner', 'PartnersController');
		Route::resource('company_profile', 'CompanyProfileController');
		Route::resource('team', 'TeamController');
		Route::resource('value', 'ValuePropositionController');
	});
});

Route::get('test', function () {
	return view('oop');
});
 
Route::get('show-category', function() {
	$result = DB::table('users')->get();
	return $result;
});

Route::get('insert-category', function() {
	DB::table('users')->insert([
		['email' => 'john@example.com', 'name' => 'Aung Aung', 'email' => 'john@gmail.com',
		'password' => '1234', 'remember_token' => '','created_at' => now(), 'updated_at' => now()],
		['email' => 'koko@example.com', 'name' => 'Ko Ko', 'email' => 'ko@gmail.com',
		'password' => '1234', 'remember_token' => '','created_at' => now(), 'updated_at' => now()]
	]);
});

Route::get('update-category', function() {
	DB::table('users')
			->where('id', 1)
            ->update(['name' => 'Hla Hla']);
});

Route::get('delete-category', function() {
	DB::table('users')
			// ->where('id', 13)->delete();
			->where('id', '>', 2)->delete();
});


Route::get('show-data', function() {
	$result = DB::table('categories')->get();
	// $result = DB::table('categories')
 //                    ->whereNotIn('id', [5, 7])
 //                    ->get();
	// $result = DB::table('categories')->count();
	// $result = DB::table('categories')->where('name', 'test')->get();
	// $result = DB::table('categories')->pluck('name');
	// $result = DB::table('categories')->where('name','testing')->value('created_at');
	// $result = DB::table('categories')->select('name as user_name')->get();
	// $result = DB::table('categories')->where('name','test')->first();
	// $result = DB::table('categories')->find(5);

	return $result;
	// return $result->id;
	// return $result->name;
});

Route::get('insert-data', function() {
	DB::table('categories')->insert([
		['name'=>'testing','created_at'=>now(),'updated_at'=>now()],
		['name'=>'test','created_at'=>now(),'updated_at'=>now()]
	]);
});

Route::get('update-data', function() {
	DB::table('categories')
			->where('id', 1)
			->update(['name' => 'Query Builder']);
});

Route::get('delete-data', function() {
	DB::table('categories')
			->where('id', 6)
			->delete();
});

Route::get('join', function() {
	$first = DB::table('users')
            ->whereNotNull('name');

	$users = DB::table('users')
	            ->whereNotNull('email')
	            ->union($first)
	            ->get();
	return $users;
});

Route::get('truncate', function() {
	DB::table('categories')->truncate();
});
