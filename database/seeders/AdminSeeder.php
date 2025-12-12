<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('username', 'adminfdc')
                     ->orWhere('email', 'admin@fleurdecake.com')
                     ->first();

        if (!$admin) {
            User::create([
                'name' => 'Administrator',
                'username' => 'adminfdc',
                'email' => 'admin@fleurdecake.com',
                'password' => bcrypt('password123'),
                'role' => 'admin',
            ]);
        }
    }
}
