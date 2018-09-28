@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="card m-t-40">
                <div class="card-header">
                    <h4>Odwołaj rezerwację</h4>
                </div>
                <div class="card-body">
                    <h5>@include('flash::message')</h5>
                    {{ Form::open([
                        'route'  => 'reservation.destroy',
                        'method' => 'DELETE',
                    ]) }}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                {{ Form::label('first_name', 'Imię')}}
                                {{ Form::text('first_name', null, [
                                    'class'    => 'form-control',
                                    'required' => 'required',
                                ]) }}
                            </div>
                            <div class="form-group col-md-4">
                                {{ Form::label('last_name', 'Nazwisko')}}
                                {{ Form::text('last_name', null, [
                                    'class'    => 'form-control',
                                    'required' => 'required',
                                ]) }}
                            </div>
                            <div class="form-group col-md-4">
                                {{ Form::label('nr_reservation', 'Numer rezerwacji')}}
                                {{ Form::text('nr_reservation', null, [
                                    'class'    => 'form-control',
                                    'required' => 'required',
                                ]) }}
                            </div>
                            {{ Form::submit('Odwołaj rezerwację', [
                                'class' => 'btn btn-outline-secondary m-t-40 w-100'
                            ]) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </main>
@endsection
