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

Route::get('/images/{id}', [
    'uses'  =>  'ImagesController@get',
    'as'    =>  'images.get'
    ]);

route::post('contact', [
    'uses'  =>  'mainController@contact'
    ]);

Route::get('/work/{id}', [
    'uses' => 'mainController@workModal'
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

    Route::resource('aims', 'AimsController');

    Route::get('aims/{id}/destroy', [
        'uses'  =>  'AimsController@destroy',
        'as'    =>  'admin.aims.destroy'
        ]);

    Route::resource('connects', 'ConnectsController');

    Route::get('connects/{id}/destroy', [
        'uses'  =>  'ConnectsController@destroy',
        'as'    =>  'admin.connects.destroy'
        ]);

    Route::resource('serviceText', 'ServiceTextController');

    Route::get('serviceText/{id}/destroy', [
        'uses'  =>  'ServiceTextController@destroy',
        'as'    =>  'admin.serviceText.destroy'
        ]);

    Route::resource('image', 'ImagesController');

    Route::get('image/image/{id}', [
        'uses'  =>  'ImagesController@index',
        'as'    =>  'admin.image.index']);

    Route::get('image/{id}/create', [
        'uses'  =>  'ImagesController@create',
        'as'    =>  'admin.image.create'
        ]);

    Route::get('image/{id}/destroy', [
        'uses'  =>  'ImagesController@destroy',
        'as'    =>  'admin.image.destroy'
        ]);

    Route::post('image/order', [
        'uses'  =>  'ImagesController@order',
        'as'    =>  'admin.image.order'
        ]);

    Route::post('/add', [
        'uses'  =>  'ImagesController@add', 
        'as'    =>  'admin.image.add'
        ]);

    Route::get('/complete', [
        'uses'  =>  'ImagesController@complete',
        'as'    =>  'admin.image.complete'
        ]);
});

Route::auth();

Route::get('/register', [
	'uses'	=>	'Auth\AuthController@showLoginForm'
    ]);