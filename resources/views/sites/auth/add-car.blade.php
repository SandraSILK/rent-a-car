@extends('layouts.app')
@section('content')

	<main>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4>Dodaj auto</h4>
					{{ Form::open(['route' => 'admin.car.store', 'files' => true]) }}

						{{ Form::label('brand', 'Marka')}}
						{{ Form::text('brand', 'Wprowadź markę', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('model', 'Model')}}
						{{ Form::text('model', 'Wprowadź model', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('year', 'Rocznik')}}
						{{ Form::number('year', 'Wprowadź rocznik', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('price', 'Cena')}}
						{{ Form::number('price', 'Wprowadź model', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('mileage', 'Przebieg')}}
						{{ Form::number('mileage', 'Wprowadź przebieg', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('colour', 'Kolor')}}
						{{ Form::text('colour', 'Wprowadź kolor', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}


						{{ Form::label('img', 'Grafika')}}
						{{ Form::file('img', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::hidden('reserved', '1', [
							'class'       => 'form-control',
							'hidden'      => 'hidden',
						]) }}

						{{ Form::submit('Dodaj pojazd', ['class' => 'btn btn-primary btn-create']) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</main>
@endsection
