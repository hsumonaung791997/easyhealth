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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Frontend'], function() {
	Route::get('/', 'HomeController@index')->name('frontend.index');
	Route::get('appointment_form', 'HomeController@appointment_form')->name('frontend.appointment_form');
	// Route::get('blogs_detail', 'HomeController@blogs_detail')->name('frontend.blogs_detail');
	Route::get('{id}/blogs_detail', 'HomeController@blogs_details')->name('frontend.blogs_detail');
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
	Route::get('ourservices', 'HomeController@ourservices')->name('frontend.our_services');
	Route::get('news_blogs', 'HomeController@newsblogs')->name('frontend.news_blogs');
	Route::get('search_blogs', 'HomeController@search_blogs')->name('frontend.search_blogs');
	Route::get('{id}/gp_services', 'HomeController@miniservices')->name('frontend.gp_services');
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