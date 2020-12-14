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
            'username' => 'bachtiar',
            'email' => 'password@email.com',
            'role' => 'Admin',
            'password' => Hash::make('test')
        ]);
    }
}
