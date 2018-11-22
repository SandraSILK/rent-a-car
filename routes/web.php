<?php

Route::name('main')->get('/', 'SitesController@index');
Route::name('index')->get('choose-car', 'VehicleController@index');

Route::group(['as' => 'reservation.', 'prefix' => 'reservation'], function () {
    Route::name('create')->get('{car}-{slug}', 'ReservationController@create');
    Route::name('store')->post('saved-car', 'ReservationController@store');
    Route::name('show')->get('remove-reservation', 'ReservationController@show');
    Route::name('destroy')->delete('remove', 'ReservationController@destroy');
    Route::get('/', function() {
        return redirect('choose-car');
    });
});

Route::namespace('Auth')->group(function() {
    Route::name('register.show')->get('/confirm-show', 'RegisterController@show');
    Route::name('register.confirm')->get('/confirm-register-{apiToken}', 'RegisterController@confirm');
});


Route::name('admin.home')->get('/admin', 'HomeController@index');
Auth::routes();
