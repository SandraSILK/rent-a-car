<?php

Route::name('main')->get('/', 'SitesController@index');
Route::name('car_list')->get('choose-car', 'SitesController@chooseCar');
Route::name('saved_form')->get('booked-car/{car}', 'SitesController@booked');
Route::name('saved_store')->post('saved-car', 'SitesController@savedCar');
// Route::name('remove_reservation')->delete('remove-reservation', 'SitesController@removeReservation');

Auth::routes();
Route::name('home')->get('/home', 'HomeController@index');