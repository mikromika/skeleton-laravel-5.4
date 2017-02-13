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

Route::group(['middleware'=>'visitor'], function() {
      Route::get('/register','Auth\RegisterController@register')->name('registerform');
      Route::post('/register','Auth\RegisterController@postRegister')->name('registersubmit');
      Route::get('/login','Auth\LoginController@login')->name('loginform');
      Route::post('/login','Auth\LoginController@postLogin')->name('loginsubmit');

});

//Route::group(['middleware'=>'web'], function() {
Route::post('/logout','Auth\LoginController@logout')->name('logout-form');
//});
Route::get('/earnings','Auth\AdminController@earnings')->name('earnings')->middleware('admin');

Route::get('/tasks','Auth\ManagerController@tasks')->name('tasks')->middleware('manager');

Route::get('/activate/{email}/{activationCode}','Auth\ActivationController@activate')->name('activate-user');

//Route::get('/bio/profile', 'Bio\ProfileController@index')->name('bio.dashboard');
