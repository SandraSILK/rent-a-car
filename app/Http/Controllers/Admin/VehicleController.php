<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    protected $path = 'sites.auth.vehicles.';

    public function index()
    {
        $vehicles = Vehicle::all();

        return view($this->path.'index', [
            'vehicles' => $vehicles,
        ]);
    }

    public function create()
    {
        return view($this->path.'create');
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

        Storage::putFileAs('public/vehicles', $request->file('file'), $name);

        $data['file'] = 'storage/vehicles/'.$name;
        $data['slug'] = sprintf('%s-%s', ($request->brand), str_slug($request->model));

        if (Vehicle::create($data)) {
            flash(sprintf('Pomyślnie dodano pojazd: %s', $request->brand), 'success');
            return redirect()
                ->route('admin.car.index');
        }

        flash('Ups coś poszło nie tak.', 'danger');
        return redirect()
            ->route('admin.car.index');
    }

    public function edit(Vehicle $vehicle)
    {
        $vehicle = Vehilce::find($id);
        return view($this->path.'edit', [
            'vehilce' => $vehicle,
        ]);
    }

    public function destroy (Vehilce $car)
    {
        $car->delete();
        /*
        * @todo 
            remove imgs from store folder
        *
        */
        flash(sprintf('Pomyślnie usunięto pojazd %s %s', $car->brand, $car->model));
        return view($this->path.'index');
    }
}
 