@extends('layouts.app')
@section('content')

	<section>
		<div class="container-fluid">
			<div class="row">
				{{-- <img src="{{ asset('images/volvo.jpg') }}" alt="hero-img" class="img-hero"> --}}
				<img src="http://localhost:8000/{{ $car->img_path}}" alt="hero-img" class="img-hero">	
				<h4 class="hero-title">{{ $car->brand }}&nbsp;{{ $car->model }}</h4>
			</div>
		</div>
	</section>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<div class="col-12">
				<h4>Złóż zamówienie</h4>
				<form action=" {{ route('saved_car') }} " method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="name">Imię</label>
						<input type="text" class="form-control" name="name" aria-describedby="namelHelp" placeholder="Wprowadź imię">						

						<label for="last-name">Nazwisko</label>
						<input type="text" class="form-control" name="last-name" aria-describedby="last-namelHelp" placeholder="Wprowadź nazwisko">

						<label for="adress">Adres</label>
						<input type="text" class="form-control" name="adress" aria-describedby="adresslHelp" placeholder="Wprowadź adres">

						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Wprowadź email">

						<label for="telephone">Telefon</label>
						<input type="number" class="form-control" name="telephone" aria-describedby="telHelp" placeholder="Wprowadź numer telefon">

						<label for="choose-car">Wybrany samochód</label>
						<input type="text" class="form-control" name="choose_car" value="{{$car->brand}} {{$car->model}}" placeholder="{{$car->brand}} {{$car->model}}" readonly>

						<label for="date-from">Data wypożyczenia</label>
						<input type="date" class="form-control" name="date-from" aria-describedby="telHelp" placeholder="Wprowadź datę wypożyczenia">

						<label for="date-to">Data oddania</label>
						<input type="date" class="form-control" name="date-to" aria-describedby="telHelp" placeholder="Wprowadź datę oddania">

						<label for="price">Cena całościowa</label>
						<input type="number" class="form-control" name="price" aria-describedby="telHelp" readonly value=33>

						<button style="margin-top: 20px;" type="submit" class="btn btn-success">Rezerwuj!</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection