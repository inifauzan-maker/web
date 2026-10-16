<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageContentFactory extends Factory
{
    public function definition(): array
    {
        return ['key' => fake()->unique()->slug(), 'label' => fake()->word(), 'meta_title' => 'Judul halaman Villa Merah', 'meta_description' => 'Informasi program belajar menggambar Villa Merah.', 'image' => '/assets/img/karya-1.webp', 'is_indexable' => true];
    }
}
