<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Notifications\Registration\ConfirmRegistration;
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'phone'      => 'required',
            'password'   => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        dd('ssss');
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'phone'      => $data['phone'],
            'email'      => $data['email'],
            'api_token'  => Hash::make($data['email']),
            'password'   => Hash::make($data['password']),
            'role'       => 2,
            'send'       => Carbon::now(),
        ]);
        // return $user;
        if ($user) {
            $user->notify(new ConfirmRegistration());
            flash('Na podany email został wysłany link aktywacyjny.', 'success');

            return view('sites/auth/register/show');
        };

        flash('Ups! Coś poszło nie tak, prosimy o kontakt z Działem Pomocy Rent A Car.', 'danger');
        return view('sites/auth/register/show');
    }

    public function confirm($apiToken)
    {
        $user = User::where('api_token', $apiToken)->first();

        if ($user) {
            flash('Konto zostało aktywowane. Życzymy szerokiej drogi.', 'success');
            return redirect(route('register.show'));
        }

        flash('Ups! Coś poszło nie tak, prosimy o kontakt z Działem Pomocy Rent A Car.', 'danger');
        return redirect(route('register.show'));
    }

    public function show()
    {
        return view('sites/auth/register/show');
    }

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     // event(new Registered($user = $this->create($request->all())));

    //     return redirect()->route('show')
    //         ->with(['success' => 'Congratulations! your account is registered, you will shortly receive an email to activate your account.']);
    // }
}