<?php

Route::name('main')->get('/', 'SitesController@index');
Route::name('index')->get('choose-car', 'VehicleController@index');

Route::group(['as' => 'reservation.', 'prefix' => 'reservation'], function () {
    Route::name('create')->get('booked-car/{car}-{slug}', 'ReservationController@create');
	Route::name('store')->post('saved-car', 'ReservationController@store');
	Route::name('show')->get('remove-reservation', 'ReservationController@show');
	Route::name('destroy')->delete('remove', 'ReservationController@destroy');
    });

Route::name('register.show')->get('/confirm-show', 'Auth\RegisterController@show');
Route::name('register.confirm')->get('/confirm-register-{apiToken}', 'Auth\RegisterController@confirm');


Auth::routes();
Route::name('admin.home')->get('/home', 'HomeController@index');