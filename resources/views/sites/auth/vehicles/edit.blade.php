@extends('layouts.admin')
@section('content')
    <main>
        <div class="row">
            <div class="col-12 m-t-40">
                <h4>Edytuj pojazd {{ $vehicle->fullName }}</h4>
                @include('errors.request-errors')
                {{ Form::model($vehicle, [
                    'route'  => ['admin.car.update', $vehicle],
                    'files'  => true,
                    'method' => 'PUT'
                ]) }}
                    @include('sites.auth.vehicles.includes.forms', [
                        'button' => 'Zapisz zmiany'
                    ])
                {{ Form::close() }}
            </div>
        </div>
    </main>
@endsection
