<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required",
            "email" => "required|unique:users,email",
            "password" => "required",
            "confirm_password" => "required|same:password",
            "birth_date" => "required",
        ]);

        User::create($validatedData);

        return response()->json([
            "success" => true,
            "message" => "Successful register as user",
            "data" => [
                "name" => $validatedData['name'],
                "email" => $validatedData['email'],
                "birth_date" => $validatedData['birth_date'],
            ],
        ], 201);
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                "success" => false,
                "message" => "Failed login. Invalid email / password",
            ], 400);
        }

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

    public function logout(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                "success" => false,
                "message" => "Unauthenticated",
            ], 401);
        }
        
        $user->tokens()->delete();

        return response()->json([
            "success" => true,
            "message" => "Successful logout",
        ], 200);
    }
}
