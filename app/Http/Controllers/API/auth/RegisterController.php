<?php

namespace App\Http\Controllers\API\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required",
            "email" => "required|unique:users,email",
            "password" => "required",
            "birth_date" => "required",
        ]);

        if ($validatedData['password'] !== $request->input('confirmation_password')) {
            return response()->json([
                "success" => false,
                "message" => "Password and confirmation password do not match."
            ], 400);
        }

        User::create($validatedData);

        return response()->json([
            "success" => true,
            "message" => "Successful register as user",
            "data" => [
                "name" => $validatedData['name'],
                "email" => $validatedData['email'],
                "birth_date" => $validatedData['required'],
            ],
        ], 201);
    }
}
