<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'web'], function () {
   //Area
    Route::group(['prefix' => 'areas', 'as' => 'areas.'], function(){
      Route::get('/index', ['as' => 'index', 'uses' => 'AreaController@index']);
      Route::get('/new', ['as' => 'create', 'uses' => 'AreaController@create']);
      Route::post('/new', ['as' => 'store', 'uses' => 'AreaController@store']);
      Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'AreaController@edit']);
      Route::post('/edit/{id}', ['as' => 'update', 'uses' => 'AreaController@update']);
      Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'AreaController@delete']);
   });
});

Route::get('/', function () {
    return view('welcome');
});
