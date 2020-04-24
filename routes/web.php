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

Route::get('terms', function () {
    return view('terms');
});
Route::get('privacy', function () {
    return view('privacy');
});

//DO NOT REMOVE THIS -- This a fix for http://my-best-doctor.uz/healthflex?wc-ajax=get_refreshed_fragments 404 page
Route::get('/', function () {
    return view('healthflex.index');
});

include('healthflex.php');



Route::get('/welcome', 'TestController@welcome');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//All Authorized users pages
Route::group(['middleware' => ['auth']], function () {
    include_once "auth_routes.php";
});
