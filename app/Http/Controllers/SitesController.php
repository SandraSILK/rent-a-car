<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Test;
use App\SavedCar;
use App\AddItem;
    
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
        $saved_car->nr_reservation = str_random(20);
        $saved_car->save();
        return view('sites.saved-car', compact('saved_car'));
    }

    // public function carCreate()
    // {
    //     return view('sites.add-car');
    // }

    // public function carStore(Request $request)
    // {

    //     $add_car = Cars::create($request->only([
    //         'brand',
    //         'model',
    //         'year',
    //         'mileage',
    //         'price',
    //         'colour',
    //         'img_path',
    //         'reserved',
    //     ]));
        
    //     return redirect()->route('admin.home')->withFlash(sprintf('Pomyślnie dodano pojazd: %s', $add_car->brand));
    // }

    public function removeReservation()
    {
        return view('sites.remove-car');
    }

    public function deleteCar()
    {
        dd('usunięto!');
    }
}


