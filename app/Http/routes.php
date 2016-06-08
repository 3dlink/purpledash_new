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

use App\Test;
use Illuminate\Http\Request;

/**
 * Show Test Dashboard
 */
Route::get('/', function () {

	$tests = Test::orderBy('created_at', 'asc')->get();

    return view('tests', [
        'tests' => $tests
    ]);
});

/**
 * Add New Test
 */
Route::post('/test', function (Request $request) {

	$validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'edad' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $test = new Test;
    $test->name = $request->name;
    $test->edad = $request->edad;
    $test->save();

    return redirect('/');

});

/**
 * Delete Test
 */
Route::delete('/test/{test}', function (Test $test) {
	$test->delete();

    return redirect('/');
});