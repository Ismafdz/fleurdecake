<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
<<<<<<< HEAD
        $this->call([
            AdminSeeder::class,
=======
        // 1. Buat User Admin (gunakan user yang sudah Anda definisikan)
        $testUser = User::factory()->create([
            'name' => 'Admin Fleur', // Ganti namanya agar lebih jelas sebagai penulis
            'username' => 'adminfleur', // Tambahkan username jika diperlukan oleh model Anda
            'email' => 'admin@fleurdecake.com', // Ganti email untuk pengujian
>>>>>>> cda6d60ecd0c3aa584e635b52917df39f250bdda
        ]);
        
        // 2. Panggil Seeder Artikel
        // Kita passing ID user ini ke ArticleSeeder agar artikel memiliki penulis
        $this->call(ArticleSeeder::class, ['authorId' => $testUser->id]);
    }
}