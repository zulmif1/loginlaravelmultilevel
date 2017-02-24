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
Route::get('/', function ()    {
	return view('welcome');
});
 Route::post('/language-chooser', 'LanguageController@changeLanguage');

 Route::post('/language/', array(
 	'before'=>'csrf',
 	'as'=>'language-chooser',
 	'uses'=>'LanguageController@changeLanguage'
 	));
// Route::get('login', function() 
// {
// });

Auth::routes();
Route::group(['middleware'=>'auth'], function(){
	Route::get('/home', function(){		
		// echo Auth::user()->level;
		if (Auth::user()->level=='admin') {
			return view('admin');
		}else if (Auth::user()->level=='user') {
			return view('user');
		}
	});
});
