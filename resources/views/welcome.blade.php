@extends('layouts.app')
@section('content')
    <main>
        <div class="img-hero text-center">
            <a href="{{route('index')}}"><h1>RENT A CAR</h1></a>
            <a href="{{route('index')}}"><h3>Wypożycz samochód</h3></a>
            <h5>@include('flash::message')</h5>
        </div>
    </main>
@endsection