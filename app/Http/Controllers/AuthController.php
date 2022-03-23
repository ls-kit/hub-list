<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrontendRegister;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login(Request $request)
    {

    }

    public function register()
    {
        return true;

    //    return User::create([
    //         'phone' => $request->phone,
    //         'password' => bcrypt($request->password),
    //     ]);



    }
}
