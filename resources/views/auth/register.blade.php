@extends('layouts.app')

@section('content')
<main>
    <div class="img-hero text-center p-top-10vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 login">
                <h6>Rejestracja</h6>
                <form id="js-form-register" method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="js-first-name" class="col-md-4 col-form-label text-md-right">Imię</label>
                        <div class="col-md-6">
                            <input id="js-first-name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-last-name" class="col-md-4 col-form-label text-md-right">Nazwisko</label>

                        <div class="col-md-6">
                            <input id="js-last-name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-tel" class="col-md-4 col-form-label text-md-right">Telefon</label>

                        <div class="col-md-6">
                            <input id="js-tel" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                        <div class="col-md-6">
                            <input id="js-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-password" class="col-md-4 col-form-label text-md-right">Hasło</label>

                        <div class="col-md-6">
                            <input id="js-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-password-confirm" class="col-md-4 col-form-label text-md-right">Powtórz hasło</label>

                        <div class="col-md-6">
                            <input id="js-password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center m-t-40">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-outline-light w-100">
                                Zarejestruj
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ 'js/registerUser.js' }}"></script>
@endpush