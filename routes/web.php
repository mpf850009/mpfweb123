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

Route::get('/', function () {
return view('welcome');
});
 */

//unionsports
Route::get('/unionsports', 'UnionsportsController@index');

//innovative
Route::get('/', 'innovativeController@index')->name('index');
Route::get('/innovative', 'innovativeController@index')->name('innovative.index');
Route::get('/innovative_about', 'innovativeController@about')->name('innovative.about');
Route::get('/innovative_mpfdrive', 'innovativeController@mpfdrive')->name('innovative.mpfdrive');
Route::get('/innovative_nikimotion', 'innovativeController@nikimotion')->name('innovative.nikimotion');
Route::get('/innovative_veer', 'innovativeController@veer')->name('innovative.veer');
Route::get('/innovative_ebike', 'innovativeController@ebike')->name('innovative.ebike');
Route::get('/innovative_flagship', 'innovativeController@flagship')->name('innovative.flagship');
Route::get('/innovative_rentplace', 'innovativeController@rentplace')->name('innovative.rentplace');
Route::get('/innovative_brand', 'innovativeController@brand')->name('innovative.brand');

//bikerental
Route::get('/bikerental', 'bikerentalController@index')->name('bikerental.index');
Route::get('/bikerental_company', 'bikerentalController@company')->name('bikerental.company');
Route::get('/bikerental_fulong', 'bikerentalController@fulong')->name('bikerental.fulong');
Route::get('/bikerental_jiaoxi', 'bikerentalController@jiaoxi')->name('bikerental.jiaoxi');
Route::get('/bikerental_onsale', 'bikerentalController@onsale')->name('bikerental.onsale');
Route::get('/bikerental_ebike', 'bikerentalController@ebike')->name('bikerental.ebike');
Route::get('/bikerental_contact', 'bikerentalController@contact')->name('bikerental.contact');
Route::get('/bikerental_beimen', 'bikerentalController@beimen')->name('bikerental.beimen');
Route::get('/bikerental_asheng_h', 'bikerentalController@asheng_h')->name('bikerental.asheng_h');
Route::get('/bikerental_asheng_t', 'bikerentalController@asheng_t')->name('bikerental.asheng_t');
Route::get('/bikerental_park_water', 'bikerentalController@park_water')->name('bikerental.park_water');
Route::get('/bikerental_explore', 'bikerentalController@explore')->name('bikerental.explore');

Route::get('/bikerental_register', 'rentalmemberController@register')->name('bikerental.register');
Route::get('/bikerental_login', 'rentalmemberController@login')->name('bikerental.login');
Route::get('/bikerental_center', 'rentalmemberController@center')->name('bikerental.center');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
