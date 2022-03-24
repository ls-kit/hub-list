<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrontendRegister;
use App\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login(Request $request)
    {

    }

    /**
     * Register a new user.
     * @param FrontendRegister $request
     * @return User
     */
    public function register(FrontendRegister $request): User
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        auth()->login($user);

        return $user;
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Logged out successfully']);
    }


}
