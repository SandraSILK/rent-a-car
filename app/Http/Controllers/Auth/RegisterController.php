<?php

namespace App\Http\Controllers\Auth;

use App\Events\RegisteredUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\StoreUserRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(StoreUserRequest $request)
    {
        $data = $request->only([
            'first_name',
            'last_name',
            'phone',
            'email',
        ]);

        $data['api_token']  = str_replace('/', rand(), Hash::make($request->email));
        $data['password']   = Hash::make($request->password);
        $data['permission'] = 2;
        $data['send']       = Carbon::now();

        $user = User::create($data);
        if ($user) {
            event(new RegisteredUser($user));
            flash('Na podany email został wysłany link aktywacyjny.', 'success');

            return view('welcome');
        };

        flash('Ups! Coś poszło nie tak, prosimy o kontakt z Działem Pomocy Rent A Car.', 'danger');
        return view('welcome');
    }

    public function show()
    {
        flash('Konto zostało aktywowane. Życzymy szerokiej drogi.', 'success');
        return view('welcome');
    }
}