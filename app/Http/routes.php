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

Route::get('/fonts', function () {
    //fonts
});

Route::get('/css', function () {
    //css
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('partials.scriptsend', function() {
    return View::make('partials/scriptsend');
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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/u/' . '{id}' . '/main', array('as' => '/u/main', 'uses' => 'MainController@index'));

    Route::get('/u/' . '{id}' . '/tasklist', array('as' => '/u/tasklist', 'uses' => 'TaskListController@index'));
});

