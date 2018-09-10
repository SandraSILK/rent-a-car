<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use Notifiable;

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
    
    protected $table   = 'reservations';

    public $timestamps = true;
}