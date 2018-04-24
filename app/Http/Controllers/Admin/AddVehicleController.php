<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Cars;

class AddVehicleController extends Controller
{
    public function create()
    {
        return view('sites.auth.add-car');
    }

    public function store(Request $request)
    {
        $add_car = Cars::create($request->only([
            'brand',
            'model',
            'year',
            'mileage',
            'price',
            'colour',
            'reserved',
        ]));

        $img = $request->file('img')->store('cars');

        
        flash(sprintf('Pomyślnie dodano pojazd: %s', $add_car->brand));
        return view('home');
    }
}
