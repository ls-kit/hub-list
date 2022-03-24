<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrontendLogin;
use App\Http\Requests\FrontendRegister;
use App\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(FrontendLogin $request)
    {
        $phone = $request->input('phone');
        $password = $request->input('password');

        if(Auth::attempt(['phone' => $phone, 'password' => $password])) {
            // login the user
            auth()->login(User::where('phone', $phone)->first());

            return response()->json([
                'message' => 'Login successful',
                'status' => 'success'
            ], 200);
        }

        return response()->json([
            'message' => 'Login failed',
            'status' => 'error'
        ], 401);

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

    public function logout(): object
    {
        auth()->logout();
        return response()->json(['message' => 'Logged out successfully']);
    }


}
