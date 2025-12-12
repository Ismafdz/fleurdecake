<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'fdcadmin',
            'email' => 'admin@fleurdecake.com',
            'password' => bcrypt('password123'),
            'role' => 'admin'
        ]);
    }
}
