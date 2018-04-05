<?php

Route::name('car.create')->get('car-add', 'AddVehicleController@create');
Route::name('car.store')->post('car-saved', 'AddVehicleController@store');
