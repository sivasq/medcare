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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user()->api_token;
	return 'testing';
});

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\LoginController@login');

//Route::middleware(['auth:api'])->group( function () {
////	Route::get('userDetails', 'API\LoginController@details');
////	Route::resource('vehicleTypes', 'API\VehicleTypeController');
//});