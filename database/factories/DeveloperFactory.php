<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define your fake data here. fake()
        return [
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'email' => fake()->companyEmail(),
            'experience' => fake()->numberBetween(0, 30),
            'description' => fake()->paragraph(5),
            // ForeignId Rel
            'company_id' => Company::inRandomOrder()->first()->id,
        ];
    }
}
