<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();

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

        Storage::putFileAs('public/cars', $request->file('img'), $name);

        $data['img'] = 'storage/cars/'.$name;
        $data['slug'] = str_slug($request->brand).'-'.str_slug($request->model);
        Car::create($data);

        flash(sprintf('Pomyślnie dodano pojazd: %s', $request->brand));
        return view('home');
    }

    public function destroy(Car $car)
    {
        // $car->delete();
        dd('test'); 
    }
}
