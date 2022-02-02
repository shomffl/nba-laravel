<?php

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

Route::get("/players/create","PlayerController@create"); 
Route::get("/players", "PlayerController@index");
Route::get("/players/{player}", "PlayerController@show");
