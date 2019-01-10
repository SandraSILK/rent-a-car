<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Helpers\Token;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function verify($token)
    {
        if ($user = User::where('api_token', $token)->first()) {
            $user->update([
                'confirmation' => '1',
                'api_token'    => Token::generate(),
            ]);

            flash('Konto zostało aktywowane. Życzymy szerokiej drogi.', 'success');
            return redirect(route('register.show'));
        }
        abort(404);
    }
}
