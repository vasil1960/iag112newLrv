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


Route::get('/', ['uses'=>'SignaliController@index', 'as'=>'home']);

Route::get('signali', ['uses'=>'SignaliController@show', 'as'=>'signali']);

Route::get('create', ['uses'=>'SignaliController@create', 'as'=>'create']);

Route::get('/signal/{id}', ['uses'=>'SignaliController@show_one', 'as'=>'signal']);
