<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function signUpUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|min:2|max:255',
            'lastname' => 'required|min:2|max:255',
            'email' => 'required|email|min:2|max:255',
            'username' => 'required|min:2|max:255',
            'password' => 'required|min:2|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->first());
        }

        $firstname = htmlspecialchars($request->input('firstname'));
        $lastname = htmlspecialchars($request->input('lastname'));
        $email = htmlspecialchars($request->input('email'));
        $username = htmlspecialchars($request->input('lastname'));
        $password = htmlspecialchars($request->input('password'));
    }
}
