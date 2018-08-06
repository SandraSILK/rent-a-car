<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Vehicle;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Vehicle::all();

        return view('sites.auth.cars.index', [
            'cars' => $cars,
        ]);
    }

    public function create()
    {
        return view('sites.auth.cars.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'brand',
            'model',
            'year',
            'mileage',
            'price',
            'colour',
            'reserved',
        ]);

        $name = 'car_'.rand().'.jpg';

        Storage::putFileAs('public/cars', $request->file('file'), $name);

        $data['file'] = 'storage/cars/'.$name;
        $data['slug'] = str_slug($request->brand).'-'.str_slug($request->model);
        Vehilce::create($data);

        flash(sprintf('Pomyślnie dodano pojazd: %s', $request->brand));
        return view('home');
    }

    public function destroy(Vehilce $car)
    {
        $car->delete();
        /*
        * @todo 
            remove imgs from store folder
        *
        */
        flash(sprintf('Pomyślnie usunięto pojazd %s %s', $car->brand, $car->model));
    }
}
 