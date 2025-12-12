<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Pastikan ada minimal 1 user untuk menjadi penulis artikel
        $user = User::first();
        if (!$user) {
            $user = User::create([
                'name' => 'Admin Fleur',
                'username' => 'adminfleur',
                'email' => 'admin@fleurdecake.com',
                'password' => bcrypt('password'), 
                'email_verified_at' => now(),
            ]);
        }
        
        // 2. Buat 5 artikel dummy
        Article::factory(5)->create(['user_id' => $user->id]);
        
        // 3. Buat 1 artikel spesifik (menggunakan data dari desain Figma Anda)
        Article::create([
            'user_id' => $user->id,
            'title' => '5 Tips Membuat Cookies Lebih Renyah',
            'slug' => Str::slug('5 Tips Membuat Cookies Lebih Renyah'),
            'excerpt' => 'Cookies adalah biskuit yang digemari banyak orang. Ikuti 5 tips rahasia ini agar cookies buatan Anda renyah sempurna.',
            'image_url' => 'https://picsum.photos/seed/cookies/800/600',
            'content' => $this->getFigmaContent(), // Ambil konten dari helper function
            'created_at' => '2025-10-05 10:00:00'
        ]);
    }
    
    // Helper function untuk konten spesifik dari desain Figma
    private function getFigmaContent(): string
    {
        return '
            <h2>1. Gunakan Mentega Berkualitas</h2>
            <p>Mentega dengan kadar lemak tinggi akan memberikan aroma dan tekstur renyah yang sempurna. Hindari margarin karena kandungan airnya membuat cookies cepat lembek.</p>

            <h2>2. Panggang dengan Suhu yang Tepat</h2>
            <p>Gunakan suhu 170°C – 180°C. Suhu terlalu rendah membuat cookies kering, sementara terlalu tinggi bisa cepat gosong.</p>
            <p><img src="https://picsum.photos/seed/temp/600/400" alt="Suhu Pemanggangan Cookies" style="float: right; margin: 0 0 10px 20px;"></p>

            <h2>3. Gunakan Gula Pasir, Bukan Gula Halus</h2>
            <p>Gula pasir membantu proses karamelisasi saat memanggang sehingga cookies terasa lebih garing di luar namun tetap lembut di dalam.</p>

            <h2>4. Dinginkan Adonan Sebelum Dipanggang</h2>
            <p>Masukkan adonan ke kulkas selama 30 menit agar tidak terlalu melebar di oven. Langkah ini menjaga bentuk dan kerenyahannya.</p>

            <h2>5. Simpan dengan Cara Benar</h2>
            <p>Setelah dingin, simpan cookies dalam wadah kedap udara bersama silica gel makanan agar renyahnya tahan lama.</p>
        ';
    }
}