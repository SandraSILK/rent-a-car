<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'address',
        'email',
        'telephone',
        'car',
        'date_from',
        'date_to',
        'price',
        'created_at',
    ];
    
    protected $table = 'reservations';
    public $timestamps = true;
}