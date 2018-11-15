@extends('layouts.admin')
@section('content')
    <main>
        <div class="row">
            <div class="offset-md-1 col-10 m-t-40">
                <h4>Wszystkie pojazdy</h4>
                @include('flash::message')
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>L.p</th>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Cena</th>
                            <th>Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
                            <tr>
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $vehicle->brand }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->price }}</td>
                                <td>
                                     <div class="alert-box shadow text-center">
                                        <h6 class="font-weight-bold">Czy chcesz usunąć?</h6>
                                        {{ Form::open([
                                            'route' => ['admin.car.destroy', $vehicle],
                                            'method' => 'DELETE',
                                        ]) }}
                                            {{ Form::submit('Tak', [
                                                'class' => 'btn btn-success float-left',
                                            ]) }}
                                        {{ Form::close() }}
                                        <button class="js-btn-no btn btn-danger float-left">NIE</button>
                                    </div>
                                    <a href="{{ route('admin.car.edit', $vehicle) }}" class="btn btn-warning">edytuj</a>
                                    <button class="js-remove btn btn-danger">usuń</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/admin.js') }}"></script>
@endpush