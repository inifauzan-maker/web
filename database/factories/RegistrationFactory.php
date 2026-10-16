<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    public function definition(): array
    {
        return ['program_id' => Program::factory(), 'name' => fake()->name(), 'phone' => '081234567890', 'email' => fake()->safeEmail(), 'school' => 'SMAN 1 Bandung', 'grade' => 'XII', 'city' => 'Bandung', 'location' => 'Bandung', 'status' => 'baru'];
    }
}
