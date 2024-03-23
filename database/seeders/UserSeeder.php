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
                "role" => 'superadmin',
                "birth_date" => "2010-01-01"
            ],
            [
                "name" => "adminLMI2",
                "email" => "adminlmi2@gmail.com",
                "password" => "12345",
                "role" => 'admin',
                "birth_date" => "2010-01-01"
            ],
            [
                "name" => "adminLMI3",
                "email" => "adminlmi3@gmail.com",
                "password" => "12345",
                "role" => 'admin',
                "birth_date" => "2010-01-01"
            ],
            [
                "name" => "userLMI1",
                "email" => "userlmi1@gmail.com",
                "password" => "12345",
                "birth_date" => "2010-01-01"
            ],
            [
                "name" => "userLMI2",
                "email" => "userlmi2@gmail.com",
                "password" => "12345",
                "birth_date" => "2010-01-01"
            ],
            [
                "name" => "userLMI3",
                "email" => "userlmi3@gmail.com",
                "password" => "12345",
                "birth_date" => "2010-01-01"
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
