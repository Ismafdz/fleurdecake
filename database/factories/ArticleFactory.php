<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User; 
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        $title = fake()->sentence(5);
        
        $content = '<h1>' . $title . '</h1>'
                 . '<p>' . fake()->paragraph(3) . '</p>'
                 . '<h2>Tips Utama</h2>'
                 . '<ol>'
                 . '<li>' . fake()->sentence(10) . '</li>'
                 . '<li>' . fake()->sentence(10) . '</li>'
                 . '<li>' . fake()->sentence(10) . '</li>'
                 . '</ol>'
                 . '<p>' . fake()->paragraph(5) . '</p>';

        return [
            'user_id' => User::factory(), 
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->paragraph(2),
            
            'image_url' => 'https://picsum.photos/seed/' . fake()->word() . '/800/600', 
            'content' => $content,
            'created_at' => fake()->dateTimeBetween('-3 months', 'now'),
        ];
    }
}