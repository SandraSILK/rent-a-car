<?php

Route::name('car.create')->get('car-add', 'AddVehicle@create');
Route::name('car.store')->post('car-saved', 'AddVehicle@store');
