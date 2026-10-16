<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    public function definition(): array
    {
        return ['name' => fake()->words(3, true), 'category' => 'Seni Rupa & Desain', 'mode' => 'Offline / Online', 'price' => 9000000, 'description' => fake()->sentence(), 'is_active' => true];
    }
}
