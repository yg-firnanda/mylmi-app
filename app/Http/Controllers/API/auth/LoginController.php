<?php

namespace App\Http\Controllers\API\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $token = Auth::user()->createToken('authToken')->plainTextToken;

            return response()->json([
                "success" => true,
                "message" => "Successful Login",
                // "token" => $token,
            ]);
        }

        return response()->json([
            "success" => false,
            "message" => "Failed login. Invalid email / password",
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            "success" => true,
            "message" => "Successful logout",
        ]);
    }
}
