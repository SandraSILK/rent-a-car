<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class VehicleController extends Controller
{
    public function index(Car $car)
    {
    	$cars = Car::all();
    	return view('sites.cars', [
            'cars' => $cars,
        ]);
    }
}
