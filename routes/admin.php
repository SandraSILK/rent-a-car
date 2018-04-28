<?php

Route::group(['as' => 'car.'], function () {
	Route::name('index')->get('cars', 'CarsController@index');
	Route::name('create')->get('car-add', 'CarsController@create');
	Route::name('store')->post('car-save', 'CarsController@store');
	Route::name('destroy')->delete('car-remove/{$car}', 'CarsController@destroy');
});