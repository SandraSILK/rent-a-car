<?php

// Route::get('profile', function () {
    Route::group(['as' => 'car.', 'prefix' => 'car'], function () {
        Route::name('index')->get('/', 'VehicleController@index');
        Route::name('create')->get('add', 'VehicleController@create');
        Route::name('store')->post('save', 'VehicleController@store');
        Route::name('edit')->get('edit-{vehicle}', 'VehicleController@edit');
        Route::name('destroy')->delete('remove/{car}', 'VehicleController@destroy');
    });
// })->middleware('verified');