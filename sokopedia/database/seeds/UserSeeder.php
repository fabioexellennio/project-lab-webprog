<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create([
            'username' => 'frandi',
            'email' => 'frandi@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('test')
        ]);
        User::create([
            'username' => 'kevin',
            'email' => 'kevin@gmail.com',
            'password' => Hash::make('test')
        ]);
    }
}
