<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function index(Vehicle $car)
    {
    	$cars = Vehicle::all();
    	return view('sites.vehicles.index', [
            'cars' => $cars,
        ]);
    }
}
