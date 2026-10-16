<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return ['title' => fake()->sentence(5), 'slug' => fake()->unique()->slug(), 'category' => 'Tips Menggambar', 'excerpt' => 'Panduan dasar untuk belajar menggambar.', 'summary' => 'Mulai dengan latihan pengamatan dan bentuk dasar.', 'body' => "## Langkah pertama\n\nLatih pengamatan bentuk setiap hari.", 'author_name' => 'Tim Villa Merah', 'author_type' => 'Organization', 'image' => '/assets/img/karya-1.webp', 'image_alt' => 'Karya siswa Villa Merah', 'status' => 'draft', 'is_indexable' => true, 'faqs' => [], 'sources' => []];
    }
}
