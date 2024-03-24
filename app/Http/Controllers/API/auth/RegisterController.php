<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
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
}
