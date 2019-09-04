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

Route::post('auth', 'UserController@Auth');
Route::post('active', 'UserController@Active');
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('me', 'UserController@Me');
});
