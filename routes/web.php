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

Route::get('/', function () {
    return view('front.pages.home');
});

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/panel', 'UserPanelContoroller@index');
    Route::get('/profile/{page}', 'UserPanelContoroller@profile');
});

