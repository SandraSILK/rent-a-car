@extends('layouts.app')
@section('content')

	<header>
		<div class="container-fluid">
			<div class="row hero-header">
				{{-- <img src="{{ asset('images/volvo.jpg') }}" alt="hero-img" class="img-hero"> --}}
				<img src="http://localhost:8000/{{ $car->img_path}}" alt="hero-img">
				<h1 class="hero-title"><strong>{{ $car->brand }}&nbsp;{{ $car->model }}</strong></h1>
			</div>
		</div>
	</header>
	<main class="container" style="margin-top: 20px;">
		<div class="row">
			<div class="col-12">
				<h4>Złóż zamówienie</h4>
				{{ Form::open(['route' => 'saved_store']) }}

					{{ Form::label('name', 'Imię') }}
					{{ Form::text('name', 'imię', [
						'class' => 'form-control',
						'required' => 'required',
					]) }}

					{{ Form::label('last_name', 'Nazwisko') }}
					{{ Form::text('last_name', 'nazwisko', [
						'class' => 'form-control',
						'required' => 'required',
					]) }}

					{{ Form::label('address', 'Adres') }}
					{{ Form::text('address', 'adres', [
						'class' => 'form-control',
						'required' => 'required',
					]) }}

					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', 'email', [
						'class' => 'form-control',
						'required' => 'required',
					]) }}

					{{ Form::label('telephone', 'Telefon') }}
					{{ Form::number('telephone', 'telefon', [
						'class' => 'form-control',
						'required' => 'required',
					]) }}

					{{ Form::label('car', 'Wybrany pojazd') }}
					{{-- {{ Form::text('choose-car', [
						'class' => 'form-control',
						'readonly' => 'readonly',
						'value' => $car->brand $car->model,
					]) }} --}}
					<input type="text" class="form-control" name="car" value="{{$car->brand}} {{$car->model}}" placeholder="{{$car->brand}} {{$car->model}}" readonly>


					{{ Form::label('date_from', 'Data wypożyczenia') }}
					{{ Form::date('date_from', 'data od', [
						'class' => 'form-control',
						'required' => 'required',
						'id' => 'js-date-from',
					]) }}

					{{ Form::label('date_to', 'Data odddania') }}
					{{ Form::date('date_to', 'data do', [
						'class' => 'form-control',
						'required' => 'required',
						'id' => 'js-date-to',
					]) }}

					{{ Form::label('price', 'Cena') }}
					<input type="number" id="js-basic-price" class="form-control" name="price-basic" readonly value={{ $car->price}} hidden>
					<input type="number" id="js-calculate-price" class="form-control" name="price" readonly value=33>

					{{ Form::submit('Dodaj pojazd', ['class' => 'btn btn-success']) }}

				{{ Form::close() }}
			</div>
		</div>
	</main>
@endsection