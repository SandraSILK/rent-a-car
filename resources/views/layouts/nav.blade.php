<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('main') }}">RENT A CAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Samochody</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('reservation.show') }}">Odwołaj rezerwację</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/login">Zaloguj się</a>
            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Zaloguj się
                </a>
                <div class="dropdown-menu login dropdown-menu-right" aria-labelledby="login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{ Form::text('email', old('email'), [
                            'id'          => 'email',
                            'class'       => $errors->has('email') ? ' is-invalid' : '',
                            'required'    => true,
                            'autofocus'   => true,
                            'placeholder' => 'Email'
                        ]) }}

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        {{ Form::password('password', null, [
                            'id'       => 'password',
                            'class'    => $errors->has('password') ? ' is-invalid' : '',
                            'required' => true,
                        ]) }}

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('zapamiętaj') }}
                            </label>

                        <button type="submit" class="btn btn-primary">
                            {{ __('zaloguj') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Zapomniałeś hasła?') }}
                        </a>
                    </form>
                    <a href="#">zarejestruj się</a>
                </div>
            </li>
        </ul>
    </div>
</nav>