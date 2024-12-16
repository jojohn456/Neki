<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function registerUser(Request $request): void
    {
        $firstname = htmlspecialchars($request->input('firstname'));
    }
}
