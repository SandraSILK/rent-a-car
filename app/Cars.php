<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'brand', 'model', 'year', 'price', 'mileage', 'colour', 'reserved', 'img_path',
    ];
   
    protected $table = 'cars';
	public $timestamps = false;
}
