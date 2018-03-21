<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedCar extends Model
{
    protected $fillable = [
        'name', 'last_name', 'adress', 'email', 'telephone', 'car', 'date_from', 'date_to', 'price',
    ];
    protected $table = 'saved_car';
    public $timestamps = false;
}