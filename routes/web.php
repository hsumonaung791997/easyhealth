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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Frontend'], function() {
	Route::get('/', 'HomeController@index')->name('frontend.index');
	Route::get('appointment_form', 'HomeController@appointment_form')->name('frontend.appointment_form');
	 
	Route::get('{id}/press_release_details', 'HomeController@press_release_details')->name('frontend.press_release_details');
	Route::get('blogs', 'HomeController@blogs')->name('frontend.blogs');
	Route::get('compare_health_assessments', 'HomeController@compare_health_assessments')->name('frontend.compare_health_assessments');
	Route::get('contact', 'HomeController@contact')->name('frontend.contact');
	 
	Route::get('health_assessments', 'HomeController@health_assessments')->name('frontend.health_assessments');

	Route::get('management_team', 'HomeController@management_team')->name('frontend.management_team');
	Route::get('{id}/gp_detail', 'HomeController@gp_detail')->name('frontend.gp_detail');
	
	Route::get('mini_pharmacies', 'HomeController@mini_pharmacies')->name('frontend.mini_pharmacies');
	Route::get('our_doctor', 'HomeController@our_doctor')->name('frontend.our_doctor');
	
	Route::get('press_release_details', 'HomeController@press_release_details')->name('frontend.press_release_details');
	Route::get('press_release', 'HomeController@press_release')->name('frontend.press_release'); 
	Route::get('privacy_policy', 'HomeController@privacy_policy')->name('frontend.privacy_policy');
	Route::get('whyus', 'HomeController@whyus')->name('frontend.whyus');
	
	Route::get('{id}/newsblog', 'HomeController@newsblog')->name('frontend.press_release');
	Route::get('{id}/blogs_detail', 'HomeController@blogs_details')->name('frontend.blogs_detail');
	Route::get('{id}/services', 'HomeController@services')->name('frontend.gp_services');
	Route::get('{id}/location_detail', 'HomeController@location_detail')->name('frontend.location_detail');
	Route::get('ourservices', 'HomeController@ourservices')->name('frontend.our_services');
	Route::get('news_blogs', 'HomeController@newsblogs')->name('frontend.news_blogs');
	Route::get('{id}/blogs_details', 'HomeController@blogs_details')->name('frontend.blogs_details');
	Route::get('{id}/press_release_details', 'HomeController@pressreleasedetails')->name('frontend.press_release_details');
	Route::get('{id}/gp_services', 'HomeController@gp_services')->name('frontend.gp_services');
	Route::get('{id}/health_assessments', 'HomeController@healthassessments')->name('frontend.health_assessments');
	Route::get('{id}/health_assessments_detail', 'HomeController@healthassessmentsdetail')->name('frontend.health_assessments_detail');
	Route::get('{id}/other', 'HomeController@other')->name('frontend.mini_pharmacies');

	Route::get('gmaps', 'HomeController@gmaps');
	//Route::get('/sendmail','SendEmailController@index');
	Route::post('/sendmail/send', 'SendEmailController@send');
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
		Route::resource('teamcover', 'TeamcoverController');
		Route::resource('facilities', 'OurFacilitiesController');
		Route::resource('users', 'UserController');
	});
});