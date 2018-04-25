@extends('layouts.app')
@section('content')

	<main>
		<div class="container">
			<div class="row">
				<div class="col-12 m-t-40">
					<h4>Odwołaj rezerwację</h4>
					<h5>@include('flash::message')</h5>
					{{ Form::open([
						'route'  => 'destroy',
						'method' => 'DELETE',
					]) }}

						{{ Form::label('first_name', 'Imię')}}
						{{ Form::text('first_name', 'Wprowadź imię', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('last_name', 'Nazwisko')}}
						{{ Form::text('last_name', 'Wprowadź imię', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::label('nr_reservation', 'Numer rezerwacji')}}
						{{ Form::text('nr_reservation', 'Wprowadź numer rezerwacji', [
							'class'       => 'form-control',
							'required'    => 'required',
						]) }}

						{{ Form::submit('Odwołaj rezerwację', ['class' => 'btn btn-success m-t-40']) }}
					{{ Form::close() }}				
				</div>
			</div>
		</div>
	</main>
@endsection
