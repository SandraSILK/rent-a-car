@extends('layouts.app')
@section('content')
	<div class="container car-show">
		<div class="card-columns">
			@foreach($cars as $car) 
				<div class="card">
					<a href="{{ route('booked', [$car, $car->slug]) }}">
						<img src="{{ $car->img }}" alt="{{ $car->brand }}" class="item-img">
					</a>
					<div class="card-body">
						<h4><strong>{{ $car->brand }}</strong></h4>
						<p>Model: {{ $car->model }} </p>
						<p>Rocznik: {{ $car->year }} </p>
						<p>Przebieg: {{ $car->mileage }} </p>
						<p>Cena: {{ $car->price }} </p>
						<p>Kolor: {{ $car->colour }} </p>	
						<a href="{{ route('booked', [$car, $car->slug]) }}" class="btn btn-success">Rezerwuj</a>
					</div>
			  	</div>
		  	@endforeach
		</div>
	</div>
@endsection