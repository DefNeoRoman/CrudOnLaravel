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


    
Route::post('test/{id}/edit', 'NewsController@edit');
Route::get('test/{id}/destroy', 'NewsController@destroy');


	

Route::resource('test','NewsController');
