<?php

Route::name('car.create')->get('car-add', 'CarsController@create');
Route::name('car.store')->post('car-saved', 'CarsController@store');

