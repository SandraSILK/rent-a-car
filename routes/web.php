<?php

Route::name('main')->get('/', 'SitesController@index');
Route::name('carsList')->get('choose-car', 'SitesController@carsList');
Route::name('booked')->get('booked-car/{car}-{slug}', 'SitesController@booked');
Route::name('store')->post('saved-car', 'SitesController@store');
Route::name('removeReservation')->get('remove-reservation', 'SitesController@removeReservation');
Route::name('destroy')->delete('remove', 'SitesController@destroy');

Auth::routes();
Route::name('home')->get('/home', 'HomeController@index');