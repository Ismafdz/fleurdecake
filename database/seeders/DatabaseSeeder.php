<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat user admin (cek dulu supaya aman)
        $adminUser = User::where('username', 'admin')
                         ->orWhere('email', 'admindua@fleurdecake.com')
                         ->first();

        if (!$adminUser) {
            $adminUser = User::create([
                'name' => 'Admin Fleur',
                'username' => 'admin',
                'email' => 'admindua@fleurdecake.com',
                'password' => bcrypt('password123'),
            ]);
        }

        // 2. Panggil AdminSeeder (cek username/email di dalam AdminSeeder)
        $this->call([
            AdminSeeder::class,
        ]);

        // 3. Panggil ArticleSeeder (tidak perlu passing ID)
        $this->call(ArticleSeeder::class);
    }
}
