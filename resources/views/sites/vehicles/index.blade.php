@extends('layouts.app')
@section('content')
    <div class="container car-show">
        <div class="card-columns">
            @foreach($cars as $car) 
                <div class="card">
                    <a href="{{ route('reservation.create', [$car, $car->slug]) }}">
                        <img src="{{ $car->file }}" alt="{{ $car->brand }}" class="item-img">
                    </a>
                    <div class="card-body">
                        <h6 class="font-weight-bold d-inline">{{ $car->brand }} {{ $car->model }}</h6>
                        <table>
                            <tr>
                                <th style="width: 50%">Rocznik:</th>
                                <td>{{ $car->year }}r.</td>
                            </tr>
                            <tr>
                                <th style="width: 50%">Przebieg:</th>
                                <td>{{ $car->mileage }}km</td>
                            </tr>
                            <tr>
                                <th style="width: 50%">Cena:</th>
                                <td>{{ $car->price }}zł/dzień</td>
                            </tr>
                            <tr>
                                <th style="width: 50%">Kolor:</th>
                                <td>{{ $car->colour }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('reservation.create', [$car, $car->slug]) }}" class="btn btn-outline-secondary d-block">Rezerwuj</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection