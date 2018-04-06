<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cars;

class AddVehicleController extends Controller
{
    public function create()
    {
        return view('sites.add-car');
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
            'img_path',
            'reserved',
        ]));

        flash(sprintf('Pomyślnie dodano pojazd: %s', $add_car->brand));
        return view('home');
    }
}
