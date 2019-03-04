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
    return view('welcome');
});

Route::get('/home', 'HomeController@dashboard');
Route::get('/detail', 'HomeController@detail');

Route::get('profile', 'HomeController@profile')->name('home.profile');
Route::post('profile', 'HomeController@storeProfile')->name('home.profile.store');


Route::get('calc', 'HomeController@calcForm')->name('home.calc.form');
Route::post('calc', 'HomeController@calcProc')->name('home.calc.store');
