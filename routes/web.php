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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('storeLocationData', 'LocationController@store')->name('storeLocationData');
Route::get('toggleNewsletter/{locationData}', 'LocationController@toggleNewsletter')->name('toggleNewsletter');
Route::get('togglePaid/{locationData}', 'LocationController@togglePaid')->name('togglePaid');
Route::post('sendEmails', 'LocationController@sendEmails')->name('sendEmails');
Route::post('storeLocation', 'LocationController@storeLocation')->name('storeLocation');

Route::get('printAllLocations', 'LocationController@printAllLocations')->name('printAllLocations');
Route::get('removeLocation/{locationData}', 'LocationController@removeLocation')->name('removeLocation');
