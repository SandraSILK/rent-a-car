<?php

// Route::get('profile', function () {
    Route::group(['as' => 'car.'], function () {
        Route::name('index')->get('cars', 'VehicleController@index');
        Route::name('create')->get('car-add', 'VehicleController@create');
        Route::name('store')->post('car-save', 'VehicleController@store');
        Route::name('edit')->get('car-edit-{vehicle}', 'VehicleController@edit');
        Route::name('destroy')->delete('car-remove/{car}', 'VehicleController@destroy');
    });
// })->middleware('verified');