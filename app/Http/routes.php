<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Service;
use Illuminate\Http\Request;

//Main Page Routes

Route::get('/', [
	'uses'	=>	'mainController@index'
]);


//Amin Panel Routes

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', [
		'uses' 	=>	'HomeController@index',
		'as'	=>	'admin.index'
	]);

    Route::resource('services', 'ServicesController');

    Route::get('services/{id}/destroy', [
    	'uses'	=>	'ServicesController@destroy',
    	'as'	=>	'admin.services.destroy'
    ]);

    Route::get('password', [
    	'uses' 	=> 	'PasswordChangeController@index',
    	'as'	=>	'admin.password'
    ]);

    Route::post('password', [
    	'uses' 	=> 	'PasswordChangeController@setPassword',
    	'as'	=>	'admin.setpwd'
    ]);

    Route::resource('phrases', 'PhrasesController');
});

Route::auth();

// Route::get('/register', [
	// 'uses'	=>	'Auth\AuthController@showLoginForm'
// ]);
