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
    <main class="container">
        <div class="row">
            <div class="col-12 m-t-40">
                <h4>Złóż zamówienie</h4>
                @include('errors.request-errors')
                {{ Form::open(['route' => 'reservation.store']) }}

                    {{ Form::label('name', 'Imię') }}
                    {{ Form::text('name', null, [
                        'class'    => 'form-control',
                        'required' => 'required',
                    ]) }}

                    {{ Form::label('last_name', 'Nazwisko') }}
                    {{ Form::text('last_name', null, [
                        'class'    => 'form-control',
                        'required' => 'required',
                    ]) }}

                    {{ Form::label('address', 'Adres') }}
                    {{ Form::text('address', null, [
                        'class'    => 'form-control',
                        'required' => 'required',
                    ]) }}

                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, [
                        'class'    => 'form-control',
                        'required' => 'required',
                    ]) }}

                    {{ Form::label('telephone', 'Telefon') }}
                    {{ Form::number('telephone', null, [
                        'class'    => 'form-control',
                        'required' => 'required',
                    ]) }}

                    {{ Form::label('car', 'Wybrany pojazd') }}
                    {{ Form::text('car', $car->fullName, [
                        'class'       => 'form-control',
                        'readonly'    => 'readonly',
                        'placeholder' => $car->fullName,
                    ]) }}

                    {{ Form::label('date_from', 'Data wypożyczenia') }}
                    {{ Form::date('date_from', 'data od', [
                        'class'    => 'form-control',
                        'required' => 'required',
                        'id'       => 'js-date-from',
                    ]) }}

                    {{ Form::label('date_to', 'Data odddania') }}
                    {{ Form::date('date_to', 'data do', [
                        'class'    => 'form-control',
                        'required' => 'required',
                        'id'       => 'js-date-to',
                    ]) }}

                    {{ Form::label('price', 'Cena') }}
                    <input type="number" id="js-basic-price" class="form-control" name="price-basic" readonly value={{ $car->price}} hidden>
                    <input type="number" id="js-calculate-price" class="form-control" name="price" readonly>

                    {{ Form::submit('Dodaj pojazd', ['class' => 'btn btn-success m-t-40 m-b-40']) }}

                {{ Form::close() }}
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ mix('js/setDate.js') }}"></script>
    <script src="{{ mix('js/calculatePrice.js') }}"></script>
@endpush