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
Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\LoginController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return Auth::user();
//	return $request->user()->api_token;
//	return 'testing';
//	dd(Auth::check());
//	dd(Auth::guard('api')->check());
//	return Auth::guard()->user();
//	return Auth::guard('api')->user();
//	dd(Auth::user());
});

Route::get('email/verify', 'API\VerificationController@show')->name('email.verification.notice');
Route::get('email/verify/{id}', 'API\VerificationController@verify')->name('email.verification.verify');
Route::get('email/resend', 'API\VerificationController@resend')->name('email.verification.resend');

Route::middleware(['auth:api'])->group( function () {
	Route::get('userDetails', 'API\VehicleTypeController@index');
	Route::post('logout', 'API\LoginController@logout');
});