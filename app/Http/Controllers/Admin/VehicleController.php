<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicles\StoreVehicleRequest;
use App\Http\Requests\Vehicles\UpdateVehicleRequest;
use App\Vehicle;
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

    public function store(StoreVehicleRequest $request)
    {
        $data = $request->only([
            'brand',
            'model',
            'year',
            'mileage',
            'price',
            'colour',
        ]);

        $data['file'] = $this->saveFile($request->file('file'));
        $data['slug'] = sprintf('%s-%s', ($request->brand), str_slug($request->model));

        if ($vehicle = Vehicle::create($data)) {
            flash(sprintf('Pomyślnie dodano pojazd: %s', $vehicle->fullName), 'success');
            return redirect()
                ->route('admin.car.index');
        }

        flash('Ups coś poszło nie tak.', 'danger');
        return redirect()
            ->route('admin.car.index');
    }

    public function edit(Vehicle $vehicle)
    {
        return view($this->path.'edit', [
            'vehicle' => $vehicle,
        ]);
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $data = $request->only([
            'brand',
            'model',
            'year',
            'mileage',
            'price',
            'colour',
        ]);

        if ($request->hasFile('file')) {
            unlink($vehicle->file);
            $data['file'] = $this->saveFile($request->file('file'));
        }

        if ($vehicle->update($data)) {
            flash(sprintf('Pomyślnie zaktualizowano %s', $vehicle->fullName));
            return redirect()
                ->route('admin.car.index');
        }
    }

    public function destroy(Vehicle $vehicle)
    {
        if ($vehicle->delete()) {
            unlink($vehicle->file);

            flash('Pomyślnie usunięto %s', $vehicle->fullName);
            return redirect()
                ->route('admin.car.index');
        }

        flash('Ups coś poszło nie tak.', 'danger');
        return redirect()
            ->route('admin.car.index');
    }

    public function saveFile($file)
    {
        $name = sprintf('car_%s.jpg', rand());
        Storage::putFileAs('public/vehicles', $file, $name);

        return sprintf('storage/vehicles/%s', $name);
    }
}
 