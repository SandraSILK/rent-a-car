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

Route::name('main')->get('/', 'SitesController@index');
Route::name('choose_car')->get('choose-car', 'SitesController@chooseCar');
Route::name('booked')->get('booked-car/{car}', 'SitesController@booked');
Route::name('saved_car')->post('saved-car', 'SitesController@savedCar');
Route::middleware('auth')->get('add-car', 'SitesController@addCar');
Route::middleware('auth')->name('add_item')->get('add-item', 'SitesController@addItem');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
