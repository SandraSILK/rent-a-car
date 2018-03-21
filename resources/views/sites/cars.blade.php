@extends('layouts.index')
@section('content')

	<div class="container cars-show">
		<div class="row">
			@foreach($cars as $car) 
				<div class="col-12 col-md-6 car-item">
					<img src="{{ $car->img_path }}" alt="{{ $car->brand }}">
					<h4>Marka: {{ $car->brand }} </h4>
					<p>Model: {{ $car->model }} </p>
					<p>Rocznik: {{ $car->year }} </p>
					<p>Przebieg: {{ $car->mileage }} </p>
					<h4>Cena: {{ $car->price }} </h4>
					<p>Kolor: {{ $car->colour }} </p>	
					<a href="{{ route('booked', $car) }}" class="btn btn-success">Rezerwuj</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection