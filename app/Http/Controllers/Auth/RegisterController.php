<?php

// namespace App\Http\Controllers\Auth;

// use App\User;
// use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\RegisterRequest;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

// class RegisterController extends Controller
// {
//     protected $redirectTo = '/home';

//     public function __construct()
//     {
//         $this->middleware('guest');
//     }

//     public function register(RegisterRequest $request)
//     {
//         $data = $request->only([
//             'first_name',
//             'last_name',
//             'phone',
//             'email',
//             'password',
//         ]);

//         $data['api_token']         = str_random(32);
//         $data['confirmation_code'] = Hash::make($data['email']);

//         return User::create($data);
//     }
// }


namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';
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
        return User::create([
            'first_name'        => $data['first_name'],
            'last_name'         => $data['last_name'],
            'phone'             => $data['phone'],
            'email'             => $data['email'],
            'api_token'         => Hash::make($data['email']),
            'password'          => Hash::make($data['password']),
            'role'              => 2,
        ]);
    }
}