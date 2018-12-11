@extends('layouts.app')

@section('content')
<main>
    <div class="img-hero p-top-25vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 login">
                    <h6 class="text-center">Logowanie</h6>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group justify-content-center row">
                            <label for="email" class="col-md-10 col-form-label">Adres e-mail</label>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group justify-content-center row">
                            <label for="password" class="col-md-10 col-form-label">Hasło</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>&nbsp;Zapamiętaj mnie
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-outline-light w-100">
                                    Zaloguj
                                </button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-link badge-light" href="{{ route('password.request') }}">Nie pamiętasz hasła?
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="row m-b-40 justify-content-center">
                        <div class="col-md-3 offset-md-5">
                            <a class="btn btn-link badge-light" href="/register">Nie masz konta? Załóż!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
