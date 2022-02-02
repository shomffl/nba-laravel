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
Route::get("/players/{player}", "PlayerController@show");
Route::get("/", "PlayerController@index");
Route::post("/players", "PlayerController@store"); 
Route::get("/players/{player}/edit", "PlayerController@edit");
Route::put("/players/{player}", "PlayerController@update");
Route::delete("/players/{player}", "PlayerController@delete");

Route::get("/teams/create", "TeamController@create");
Route::get("/teams", "TeamController@index");
Route::get("/teams/{team}/edit", "TeamController@edit"); 
Route::get("/teams/{team}", "TeamController@show");
Route::post("/teams", "TeamController@store");