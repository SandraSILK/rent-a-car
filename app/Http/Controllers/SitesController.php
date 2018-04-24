<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Reservation;
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
        $reservations = new Reservation();

        $data = $request->only([
            'name',
            'last_name',
            'address',
            'email',
            'telephone',
            'car',
            'date_from',
            'date_to',
            'price',
        ]);

        $reservation = Reservation::make($data);
        $reservation->nr_reservation = str_random(20);
        $reservation->save();

        return view('sites.reservation', [
            'reservation' => $reservation,
        ]);
    }

    public function removeReservation()
    {  
        return view('sites.remove-car');
    }

    public function reservationRemove(Request $request)
    {
        $nr_reservation = $request->input('nr_reservation');
        $reservation = Reservation::where('nr_reservation', $nr_reservation)->first();

        if ($reservation) {
            $reservation->delete();

            flash('Pomyślnie usunięto rezerwację.');
            return redirect('/');
        }
       
        flash('Błędne dane do odwołania rezerwacji.');
        return redirect('remove-reservation');
           
    }
}


