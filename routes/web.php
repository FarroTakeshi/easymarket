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

   //Supplier
    Route::group(['prefix' => 'suppliers', 'as' => 'suppliers.'], function(){
      Route::get('/index', ['as' => 'index', 'uses' => 'SupplierController@index']);
      Route::get('/new', ['as' => 'create', 'uses' => 'SupplierController@create']);
      Route::post('/new', ['as' => 'store', 'uses' => 'SupplierController@store']);
      Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'SupplierController@edit']);
      Route::post('/edit/{id}', ['as' => 'update', 'uses' => 'SupplierController@update']);
      Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'SupplierController@delete']);
   });

   //Warehouse
    Route::group(['prefix' => 'warehouse', 'as' => 'warehouse.'], function(){
      Route::get('/index', ['as' => 'index', 'uses' => 'WarehouseController@index']);
      Route::get('/edit/{warehouse}', ['as' => 'edit', 'uses' => 'WarehouseController@edit']);
      Route::post('/edit/{warehouse}', ['as' => 'update', 'uses' => 'WarehouseController@update']);

      Route::group(['prefix' => '{warehouse}'], function(){
         //Product
         Route::group(['prefix' => 'products', 'as' => 'products.'], function(){
            Route::get('/index', ['as' => 'index', 'uses' => 'ProductController@index']);
            Route::get('/new', ['as' => 'create', 'uses' => 'ProductController@create']);
            Route::post('/new', ['as' => 'store', 'uses' => 'ProductController@store']);
            Route::get('/edit/{product}', ['as' => 'edit', 'uses' => 'ProductController@edit']);
            Route::post('/edit/{product}', ['as' => 'update', 'uses' => 'ProductController@update']);
            Route::get('/delete/{product}', ['as' => 'delete', 'uses' => 'ProductController@delete']);
         });
      });
   });

   //Auth
   Route::get('/login', 'Auth\LoginController@login');
   Route::post('/login', 'Auth\LoginController@login');
   Route::get('/logout', 'Auth\LoginController@logout');

   Route::get('/', function () {
      return redirect()->route('login');
   });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
