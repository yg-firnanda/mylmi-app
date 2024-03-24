<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken($user->email . "'s authToken")->plainTextToken;

            return response()->json([
                "success" => true,
                "message" => "Successful Login",
                "data" => [
                    "name" => $user->name,
                    "email" => $user->email,
                    "token" => $token,
                ],
            ], 200);
        }

        return response()->json([
            "success" => false,
            "message" => "Failed login. Invalid email / password",
        ], 400);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            echo "Hello";
        } else {
            echo "What???";
        }
        // if ($request->user()) {
        //     $request->user()->currentAccessToken()->delete();
            
        //     return response()->json([
        //         "success" => true,
        //         "message" => "Successful logout",
        //     ]);
        // }
    
        // return response()->json([
        //     "success" => false,
        //     "message" => "Unauthorized logout",
        // ], 401);
    }
}
