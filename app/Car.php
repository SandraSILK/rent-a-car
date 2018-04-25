<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'mileage',
        'colour',
        'reserved',
        'img',
        'slug',
    ];
   
	public $timestamps = false;
}
