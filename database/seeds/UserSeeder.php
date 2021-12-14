<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'username' => "Alex Martinez",
            'name' => "Alexis Morales Martinez",
            'email' => "alexisGMM99@gmail.com",
            'password' => Hash::make('welog123'),
        ]);
    }
}
