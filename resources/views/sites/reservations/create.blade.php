@extends('layouts.app')
@section('content')
    <header>
        <div class="container-fluid">
            <div class="row hero-header">
                <img src="{{ asset($car->file) }}" alt="">
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
                {{ Form::open(['route' => 'reservation.store']) }}
                    <div class="form-row">
                        <div class="form-group col-md-6 {{ $errors->has('name') ? 'error-validation' : '' }}">
                            {{ Form::label('name', 'Imię') }}
                            {{ Form::text('name', null, [
                                'class'    => 'form-control',
                            ]) }}
                        @if($errors->has('name'))
                            <p>{{ $errors->first('name') }}</p>
                        @endif
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('last_name') ? 'error-validation' : '' }}">
                            {{ Form::label('last_name', 'Nazwisko') }}
                            {{ Form::text('last_name', null, [
                                'class'    => 'form-control',
                                
                            ]) }}
                            @if($errors->has('last_name'))
                                <p>{{ $errors->first('last_name') }}</p>
                            @endif
                        </div>
                        <div class="form-group col-5 {{ $errors->has('address') ? 'error-validation' : '' }}">
                            {{ Form::label('address', 'Adres') }}
                            {{ Form::text('address', null, [
                                'class'    => 'form-control',
                                
                            ]) }}
                            @if($errors->has('address'))
                                <p>{{ $errors->first('address') }}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('email') ? 'error-validation' : '' }}">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, [
                                'class'    => 'form-control',
                                
                            ]) }}
                            @if($errors->has('email'))
                                <p>{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-3 {{ $errors->has('telephone') ? 'error-validation' : '' }}">
                            {{ Form::label('telephone', 'Telefon') }}
                            {{ Form::number('telephone', null, [
                                'class'    => 'form-control',
                                
                            ]) }}
                            @if($errors->has('telephone'))
                                <p>{{ $errors->first('telephone') }}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-3 {{ $errors->has('date_from') ? 'error-validation' : '' }}">
                            {{ Form::label('date_from', 'Data wypożyczenia') }}
                            {{ Form::date('date_from', 'data od', [
                                'class'    => 'form-control',
                                
                                'id'       => 'js-date-from',
                            ]) }}
                            @if($errors->has('date_from'))
                                <p>{{ $errors->first('date_from') }}</p>
                            @endif
                        </div>
                        <div class="form-group col-md-3 {{ $errors->has('date_to') ? 'error-validation' : '' }}">
                            {{ Form::label('date_to', 'Data odddania') }}
                            {{ Form::date('date_to', 'data do', [
                                'class'    => 'form-control',
                                
                                'id'       => 'js-date-to',
                            ]) }}
                            @if($errors->has('date_to'))
                                <p>{{ $errors->first('date_to') }}</p>
                            @endif
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
                        <div class="form-group col-md-3">
                            {{ Form::label('car', 'Wybrany pojazd') }}
                            {{ Form::text('car', $car->fullName, [
                                'class'       => 'form-control',
                                'readonly'    => 'readonly',
                                'placeholder' => $car->fullName,
                            ]) }}
                        </div>
                        <div class="form-group {{ $errors->has('rules') ? 'error-validation' : '' }}">
                            <label>
                                {{ Form::checkbox('rules', 1) }} Akceptuję warunki regulaminu.
                            </label>
                            @if($errors->has('rules'))
                                <p>{{ $errors->first('rules') }}</p>
                            @endif
                        </div>
                        {{ Form::submit('Dodaj pojazd', [
                            'class' => 'btn btn-outline-secondary m-b-40 w-100'
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