<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'mileage',
        'colour',
        'reserved',
        'file',
        'slug',
    ];

    public function getFullNameAttribute()
    {
        return sprintf('%s %s', $this->brand, $this->model);
    }
}
