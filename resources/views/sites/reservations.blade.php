@extends('layouts.app')
@section('content')

<div class="container">
<p>Dziękujemy {{ $reservations->name }} {{ $reservations->last_name }}, Twój samochód {{ $reservations->car }} został zarezerwowany w terminie {{ $reservations->date_from }} - {{ $reservations->date_to }} w cenie {{ $reservations->price }}.</p>
<p>Mail ze szczegółami został przesłany na adres mailowy {{ $reservations->email }}</p>
<h6>Numer rezerwacji <strong>{{ $reservations->nr_reservation }}</strong>.</h6>
@endsection