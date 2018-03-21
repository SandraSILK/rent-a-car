@extends('layouts.app')
@section('content')

	<main>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4>Dodaj auto</h4>
					{{-- {{ Form::open(['route' => 'add_item']) }}

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

						{{ Form::submit('Dodaj pojazd', ['class' => 'btn btn-primary btn-create']) }}
						
					{{ Form::close() }} --}}

				{{-- 	<form action=" {{ route('add_item') }} " method="post">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<label for="brand">Marka</label>
						<input type="text" class="form-control" name="brand" aria-describedby="namelHelp" placeholder="Wprowadź markę">

						<label for="model">Model</label>
						<input type="text" class="form-control" name="model" aria-describedby="namelHelp" placeholder="Wprowadź model">

						<label for="year">Rocznik</label>
						<input type="text" class="form-control" name="year" aria-describedby="namelHelp" placeholder="Wprowadź rocznik">

						<label for="price">Cena</label>
						<input type="text" class="form-control" name="price" aria-describedby="namelHelp" placeholder="Wprowadź cenę">


						<label for="mileage">Przebieg</label>
						<input type="text" class="form-control" name="mileage" aria-describedby="namelHelp" placeholder="Wprowadź przebieg">

						<label for="colour">Kolor</label>
						<input type="text" class="form-control" name="colour" aria-describedby="namelHelp" placeholder="Wprowadź kolor">

						<label for="img_path">Grafika</label>
						<input type="file" class="form-control" name="img_path" aria-describedby="namelHelp" placeholder="Wprowadź plik z grafiką">
						<button class="btn btn-success" type="submit">Wprowadź</button>
					</form> --}}
				</div>
			</div>
		</div>
	</main>
@endsection
