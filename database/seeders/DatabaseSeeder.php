<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

    User::create([
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 30,
        'adresse' => '123 Main St',
        'telephone' => '123',
        'CNI' => '123456789',
        'email' => 'john@example.com',
        'type' => 1, // Admin
        'password' => Hash::make('123'),
        'email_verified_at' => now(),
    ]);

    User::create([
        'first_name' => 'Johni',
        'last_name' => 'Doe',
        'age' => 30,
        'adresse' => '123 Main St',
        'telephone' => '12345',
        'CNI' => '987654321',
        'email' => 'johni@example.com',
        'type' => 0,
        'password' => Hash::make('12345'),
        'email_verified_at' => now(),
    ]);


    }
}
