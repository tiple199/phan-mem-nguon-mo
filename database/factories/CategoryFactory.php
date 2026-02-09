<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true), 
            'description' => fake()->paragraph(),
            'image' => fake()->optional()->imageUrl(640, 480, 'business'),
            'parent_id' => fake()->optional()->numberBetween(1, 5),
            'is_active' => fake()->boolean(90), // 90% true
            'is_deleted' => false, // mặc định 0
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
