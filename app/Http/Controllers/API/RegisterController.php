<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function verify($token)
    {
        if (User::where('api_token', $token)->first()) {
            flash('Konto zostało aktywowane. Życzymy szerokiej drogi.', 'success');
            return redirect(route('register.show'));
        }
        abort(404);
    }
}
