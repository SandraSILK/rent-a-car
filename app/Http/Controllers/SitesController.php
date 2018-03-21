<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Test;
use App\SavedCar;
use App\AddItem;
use Input;
    
class SitesController extends Controller
{
    public function index() 
    {
    	return view('welcome');
    }

    public function chooseCar() 
    {
    	$cars = Cars::all();
    	return view('sites.cars', compact('cars'));
    }

    public function booked(Cars $car) {
    	return view('sites.booked', compact('car'));
    }

    public function savedCar(Request $request)
    {
        $saved_car = new SavedCar();

        $saved_car->name = $request->input('name');
        $saved_car->last_name = $request->input('last-name');
        $saved_car->adress = $request->input('adress');
        $saved_car->email = $request->input('email');
        $saved_car->telephone = $request->input('telephone');
        $saved_car->car = $request->input('choose_car');
        $saved_car->date_from = $request->input('date-from');
        $saved_car->date_to = $request->input('date-to');
        $saved_car->price = $request->input('price');

        $saved_car->save();
        return view('sites.saved-car', compact('saved_car'));
    }

    public function addCar()
    {
        return view('sites.add-car');
    }

    public function addItem(Cars $car)
    {

        // $add_car = new Cars();
            // dd($add_car);
            // $add_car->brand = input('brand');
            // $add_car->model = input('model');
            // $add_car->year = input('year');
            // $add_car->mileage = input('mileage');
            // $add_car->price = input('price');
            // $add_car->colour = input('colour');
            // $add_car->img_path = input('img_path');
            // $add_car->save();
        dd('brawo!');
        return view('sites.test');
    }
}
