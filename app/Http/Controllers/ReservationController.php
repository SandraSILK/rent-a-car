<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Reservation;
use App\Vehicle;

class ReservationController extends Controller
{
    public function create(Vehicle $car) {
    	return view('sites.reservations.booked', [
            'car' => $car,
        ]);
    }

    public function store(Request $request)
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

        return view('sites.reservations.reservation', [
            'reservation' => $reservation,
        ]);
    }

    public function show()
    {  
        return view('sites.reservations.removeReservation');
    }

    public function destroy(Request $request)
    {
        $nr_reservation = $request->input('nr_reservation');
        $reservation = Reservation::where('nr_reservation', $nr_reservation)->first();

        if ($reservation) {
            $reservation->delete();

            flash('Pomyślnie usunięto rezerwację.');
            return redirect('/');
        }
       
        flash('Błędne dane.', 'danger');
        return redirect('reservation/reservations.remove-reservation');
           
    }
}
