<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "adminLMI1",
                "email" => "adminlmi1@gmail.com",
                "password" => "12345",
                "is_admin" => 1,
            ],
            [
                "name" => "adminLMI2",
                "email" => "adminlmi2@gmail.com",
                "password" => "12345",
                "is_admin" => 1,
            ],
            [
                "name" => "adminLMI3",
                "email" => "adminlmi3@gmail.com",
                "password" => "12345",
                "is_admin" => 1,
            ],
            [
                "name" => "userLMI1",
                "email" => "userlmi1@gmail.com",
                "password" => "12345",
            ],
            [
                "name" => "userLMI2",
                "email" => "userlmi2@gmail.com",
                "password" => "12345",
            ],
            [
                "name" => "userLMI3",
                "email" => "userlmi3@gmail.com",
                "password" => "12345",
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
