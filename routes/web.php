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


Route::get('get-geo-names-file', 'GeoNamesController@getGeoNamesFile');

Route::get('/', 'GeoNamesController@getHomePage');
Route::post('get-twenty-cities', 'GeoNamesController@getTwentyCities');
