<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/emaberto', 'DuplicController@index');

Route::apiResource('guests', 'api\GuestController' );
Route::get('searchGuest', 'api\GuestController@search');
Route::apiResource('chekins', 'api\ChekinController' );


