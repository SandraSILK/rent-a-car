@extends('layouts.app')
@section('content')

	<main>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4>Odwołaj rezerwację</h4>
					{{ Form::open(['route' => 'admin.car.store']) }}

						{{ Form::label('name', 'Imię')}}
						{{ Form::text('name', 'Wprowadź imię', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('last_name', 'Model')}}
						{{ Form::text('last_name', 'Wprowadź model', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('Car', 'Samochód')}}
						{{ Form::text('Car', 'Samochód', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('nr_reservation', 'Numer rezerwacji')}}
						{{ Form::text('nr_reservation', 'Wprowadź numer rezerwacji', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::submit('Odwołaj rezerwację', ['class' => 'btn btn-success']) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</main>
@endsection
