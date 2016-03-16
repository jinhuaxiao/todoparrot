<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$items = array(
 		'items' => ['Pack luggage', 'Go to airport', 'Arrive in San Juan']
 	);
 	//\Log::info('Just an informational message.');
 	//\Log::warning('Just an informational message.');
 	//\Log::error('Just an informational message.');
 	//\Log::critical('Just an informational message.');
 	\Debugbar::error('Something is definitely going wrong.');
 	//dd($items);
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
