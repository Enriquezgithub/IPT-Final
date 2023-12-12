<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'capacity' => fake()->numberBetween(30,50),
            'room_type' => fake()->word(10),
            'room_num' => fake()->numberBetween(1,10),
            'floor_level' => fake()->randomElement(['First', 'Second', 'Third', 'Fourth'])           
        ];
    }
}
