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
Route::resource('post', 'PostController');

Route::group(['prefix'=>'admin'],function(){
	Route::get('/', function () {
		return redirect('admin/login');
	});
	Auth::routes();

	Route::group(['namespace' => 'Backend'],function(){
		Route::resource('category', 'CategoryController');
		Route::delete('media/{id}', 'MediaController@destroy');
		Route::resource('blog', 'BlogController');
	});
});