@extends('layouts.admin')
@section('content')
    <main>
        <div class="row">
            <div class="col-12 m-t-40">
                <h4>Dodaj pojazd</h4>
                {{ Form::open([
                    'route' => 'admin.car.store',
                    'files' => true
                ]) }}
                    @include('sites.auth.vehicles.includes.forms', [
                        'button' => 'Dodaj pojazd' 
                    ])
                {{ Form::close() }}
            </div>
        </div>
    </main>
@endsection
