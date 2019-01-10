<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Hash;

class Token
{
    public static function generate()
    {
        $characters  = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$.';
        $charsLength = strlen($characters) -1;
        $string = '';

        for($i = 0; $i < $charsLength; $i++){
            $num = mt_rand(0, $charsLength);
            $string .= $characters[$num];
        }

        return Hash::make($string);
    }
}