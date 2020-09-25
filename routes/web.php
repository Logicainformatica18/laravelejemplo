<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('template');
});

Route::resource("persons", 'PersonsController');

Route::post('personsStore',"PersonsController@store");
Route::post('personsEdit',"PersonsController@edit");
Route::post('personsUpdate',"PersonsController@update");
Route::post('personsDestroy',"PersonsController@destroy");




Route::resource("category", 'CategoryController');

Route::post('categoryStore',"CategoryController@store");
Route::post('categoryEdit',"CategoryController@edit");
Route::post('categoryUpdate',"CategoryController@update");
Route::post('categoryDestroy',"CategoryController@destroy");
