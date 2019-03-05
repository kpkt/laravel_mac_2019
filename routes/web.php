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
    return view('dashboard');
//    return view('welcome');
});

Route::get('/home', 'HomeController@dashboard');
Route::get('/detail', 'HomeController@detail');
Route::get('calc', 'HomeController@calcForm')->name('home.calc.form');
Route::post('calc', 'HomeController@calcProc')->name('home.calc.store');

//List Profile
Route::get('list-profile', 'HomeController@profile_list')->name('home.list-profile');
Route::get('list-all-profile', 'HomeController@profile_all')->name('home.list-all-profile');
Route::get('list-trash-profile', 'HomeController@profile_trash')->name('home.list-trash-profile');

//Create Profile
Route::get('profile', 'HomeController@profile')->name('home.profile');
Route::post('profile', 'HomeController@storeProfile')->name('home.profile.store');
//Update Profile
Route::get('profile/{id}', 'HomeController@profile_edit')->name('home.profile.edit');
Route::post('profile/{id}', 'HomeController@profile_update')->name('home.profile.update');
//Delete Profile
Route::get('profile/{id}/delete', 'HomeController@profile_destroy')->name('home.profile.destroy');

