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

Route::get('/', ['as' => 'index',function() {
    return view('pages.index');
}]);
Route::get('/widgets', ['as' => 'widgets',function() {
    return view('pages.widgets');
}]);
Route::get('/charts', ['as' => 'charts',function() {
    return view('pages.charts');
}]);