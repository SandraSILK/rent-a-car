@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
				<p>Dziękujemy {{ $reservation->name }} {{ $reservation->last_name }}, Twój samochód {{ $reservation->car }} został zarezerwowany w terminie {{ $reservation->date_from }} - {{ $reservation->date_to }} w cenie {{ $reservation->price }}.</p>
				<p>Mail ze szczegółami został przesłany na adres mailowy {{ $reservation->email }}</p>
				<h6>Numer rezerwacji <strong>{{ $reservation->nr_reservation }}</strong>.</h6>
			</div>
		</div>
	</div>
@endsection