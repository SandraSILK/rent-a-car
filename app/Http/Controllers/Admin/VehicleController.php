<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicles\StoreVehicleRequest;
use App\Http\Requests\Vehicles\UpdateVehicleRequest;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;

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
            'reserved',
        ]);

        $data['file'] = $this->saveFile($request->file('file'));
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
            'reserved',
        ]);

        if ($request->hasFile('file')) {
            // $path = str_replace('/', '\\', $vehicle->file);
            // unlink(storage_path($vehicle->file));
            // File::delete($vehicle->file);
            dd(File::delete($vehicle->file));
            $data['file'] = $this->saveFile($request->file('file'));
        }

        $vehicle->update($data);
        dd($vehicle->model);
    }

    public function destroy(Vehicle $vehicle)
    {
        // dd($vehicle);
        $vehicle->delete();
        /*
        * @todo 
            remove imgs from store folder
        *
        */
        flash(sprintf('Pomyślnie usunięto pojazd %s %s', $vehicle->fullName));
        return view($this->path.'index');
    }

    public function saveFile($file)
    {
        $name = sprintf('car_%s.jpg', rand());
        Storage::putFileAs('public/vehicles', $file, $name);

        return sprintf('storage/vehicles/%s', $name);
    }
}
 