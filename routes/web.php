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
    return view('main.nerve');
});

Route::get('signup','SignupController@index')->name('signup');

Route::get('/prueba',function(){
    return view('prueba');
});
//Route::resource('test',"PruebaController");
Route::post('view',"PruebaController@view");

Route::get('login', function(){
    return view('login.login');
});
