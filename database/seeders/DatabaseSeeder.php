<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Admin (gunakan user yang sudah Anda definisikan)
        $testUser = User::factory()->create([
            'name' => 'Admin Fleur', // Ganti namanya agar lebih jelas sebagai penulis
            'username' => 'adminfleur', // Tambahkan username jika diperlukan oleh model Anda
            'email' => 'admin@fleurdecake.com', // Ganti email untuk pengujian
        ]);
        
        // 2. Panggil Seeder Artikel
        // Kita passing ID user ini ke ArticleSeeder agar artikel memiliki penulis
        $this->call(ArticleSeeder::class, ['authorId' => $testUser->id]);
    }
}