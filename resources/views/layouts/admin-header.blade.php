<a class="navbar-brand float-left" href="{{ route('main') }}">RENT A CAR</a>
<p class="d-inline">Witaj {{ Auth::user()->first_name }}</p>
{{ Form::open(['route' => 'logout', 'class' => 'd-inline']) }}
    {{ Form::submit('wyloguj', ['class'=>'btn btn-link']) }}
{{ Form::close() }}