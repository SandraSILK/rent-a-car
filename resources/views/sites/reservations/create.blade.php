@extends('layouts.app')
@section('content')
    <header>
        <div class="container-fluid">
            <div class="row hero-header">
                <img src="http://localhost:8000/{{ $car->file}}" alt="">
                <h1 class="hero-title"><strong>{{ $car->brand }}&nbsp;{{ $car->model }}</strong></h1>
            </div>
        </div>
    </header>
    <main class="container m-b-40">
        <div class="card m-t-40">
            <div class="card-header">
                <h4>Złóż zamówienie</h4>
            </div>
            <div class="card-body">
                @include('errors.request-errors')
                {{ Form::open(['route' => 'reservation.store']) }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('name', 'Imię') }}
                            {{ Form::text('name', null, [
                                'class'    => 'form-control',
                                'required' => 'required',
                            ]) }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('last_name', 'Nazwisko') }}
                            {{ Form::text('last_name', null, [
                                'class'    => 'form-control',
                                'required' => 'required',
                            ]) }}
                        </div>
                        <div class="form-group col-5">
                            {{ Form::label('address', 'Adres') }}
                            {{ Form::text('address', null, [
                                'class'    => 'form-control',
                                'required' => 'required',
                            ]) }}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, [
                                'class'    => 'form-control',
                                'required' => 'required',
                            ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('telephone', 'Telefon') }}
                            {{ Form::number('telephone', null, [
                                'class'    => 'form-control',
                                'required' => 'required',
                            ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('car', 'Wybrany pojazd') }}
                            {{ Form::text('car', $car->fullName, [
                                'class'       => 'form-control',
                                'readonly'    => 'readonly',
                                'placeholder' => $car->fullName,
                            ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('date_from', 'Data wypożyczenia') }}
                            {{ Form::date('date_from', 'data od', [
                                'class'    => 'form-control',
                                'required' => 'required',
                                'id'       => 'js-date-from',
                            ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('date_to', 'Data odddania') }}
                            {{ Form::date('date_to', 'data do', [
                                'class'    => 'form-control',
                                'required' => 'required',
                                'id'       => 'js-date-to',
                            ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('price', 'Cena') }}
                            {{ Form::hidden('price-basic', $car->price, [
                                'id'       => 'js-basic-price',
                                'readonly' => true,
                            ]) }}
                            {{ Form::number('price', $car->price, [
                                'id'       => 'js-calculate-price',
                                'class'    => 'form-control',
                                'readonly' => true,
                            ]) }}
                        </div>

                        {{ Form::submit('Dodaj pojazd', [
                            'class' => 'btn btn-outline-secondary m-t-40 m-b-40 w-100'
                        ]) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ mix('js/setDate.js') }}"></script>
    <script src="{{ mix('js/calculatePrice.js') }}"></script>
@endpush