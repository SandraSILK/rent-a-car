<div class="form-group row">
    <div class="col-md-3">
        {{ Form::label('brand', 'Marka') }}
        {{ Form::text('brand', null, [
            'class'    => 'form-control',
                    ]) }}
    </div>
    <div class="col-md-3">
        {{ Form::label('model', 'Model')}}
        {{ Form::text('model', null, [
            'class'    => 'form-control',
                    ]) }}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2">
        {{ Form::label('year', 'Rocznik')}}
        {{ Form::number('year', null, [
            'class'    => 'form-control',
                    ]) }}
    </div>
    <div class="col-md-2">
        {{ Form::label('mileage', 'Przebieg')}}
        {{ Form::text('mileage', null, [
            'class'    => 'form-control',
                    ]) }}
    </div>  
    <div class="col-md-2">
        {{ Form::label('price', 'Cena')}}
        {{ Form::number('price', null, [
            'class'    => 'form-control',
                    ]) }}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-3">
        {{ Form::label('colour', 'Kolor')}}
        {{ Form::text('colour', null, [
            'class'    => 'form-control',
                    ]) }}
    </div>
    <div class="col-md-3">
        {{ Form::label('file', 'Grafika')}}
        {{ Form::file('file') }}

        {{ Form::hidden('reserved', '1', [
            'class'  => 'form-control',
            'hidden' => 'hidden',
        ]) }}
    </div>
</div>
@if(isset($vehicle) && $vehicle->file)
    <div class=<div class="form-group row">
        <div class="col-md-3">
            Aktualnie wybrana grafika
            <img src="{{ asset($vehicle->file) }}" width="400px">
        </div>
    </div>
@endif
{{ Form::submit($button, [
    'class' => 'btn btn-outline-dark col-md-6 m-t-40'
]) }}
