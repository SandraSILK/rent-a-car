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
Route::name('car_list')->get('choose-car', 'SitesController@chooseCar');
Route::name('saved_form')->get('booked-car/{car}', 'SitesController@booked');
Route::name('saved_store')->post('saved-car', 'SitesController@savedCar');
// Route::name('remove_reservation')->delete('remove-reservation', 'SitesController@removeReservation');

Route::name('home')->get('/home', 'HomeController@index');
Auth::routes();



// Route::group(['middleware' => 'auth', 'as' => 'admin.'], function() {
// 	Route::get('/home', 'HomeController@index')->name('home');
// 	Route::name('car.create')->get('car-add', 'SitesController@carCreate');
// 	Route::name('car.store')->post('car-saved', 'SitesController@carStore');
// });