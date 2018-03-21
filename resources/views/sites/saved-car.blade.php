@extends('layouts.app')
@section('content')

<div class="container">
<p>Dziękujemy {{ $saved_car->name }} {{ $saved_car->last_name }}, Twój samochód {{ $saved_car->car }} został zarezerwowany w terminie {{ $saved_car->date_from }} - {{ $saved_car->date_to }} w cenie {{ $saved_car->price }}.</p>
<p>Mail ze szczegółami został przesłany na adres mailowy {{ $saved_car->email }}</p>
@endsection