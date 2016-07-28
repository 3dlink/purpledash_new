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
use App\Phrase;
use App\Work;
use Illuminate\Http\Request;

//Main Page Routes

Route::get('/', [
	'uses'	=>	'mainController@index',
    'as'    =>  'index'
]);

route::post('contact', [
    'uses'  =>  'mainController@contact'
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

    Route::get('phrases/{id}/destroy', [
        'uses'  =>  'PhrasesController@destroy',
        'as'    =>  'admin.phrases.destroy'
    ]);

    Route::resource('works', 'WorksController');

    Route::get('works/{id}/destroy', [
        'uses'  =>  'WorksController@destroy',
        'as'    =>  'admin.works.destroy'
    ]);

    Route::resource('contacts', 'ContactsController');

    Route::get('contacts/{id}/destroy', [
        'uses'  =>  'ContactsController@destroy',
        'as'    =>  'admin.contacts.destroy'
    ]);

    Route::get('works/active/{id}', [
        'uses'  =>  'WorksController@active'
    ]);

    Route::resource('abouts', 'AboutsController');

    Route::get('abouts/{id}/destroy', [
        'uses'  =>  'AboutsController@destroy',
        'as'    =>  'admin.abouts.destroy'
    ]);

    Route::resource('philosophies', 'PhilosophiesController');

    Route::get('philosophies/{id}/destroy', [
        'uses'  =>  'PhilosophiesController@destroy',
        'as'    =>  'admin.philosophies.destroy'
    ]);

    Route::resource('teams', 'TeamsController');

    Route::get('teams/{id}/destroy', [
        'uses'  =>  'TeamsController@destroy',
        'as'    =>  'admin.teams.destroy'
    ]);
});

Route::auth();

Route::get('/register', [
	'uses'	=>	'Auth\AuthController@showLoginForm'
]);