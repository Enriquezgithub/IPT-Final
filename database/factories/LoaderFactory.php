<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Load>
 */
class LoaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => fake()->randomElement(Subject::pluck('id')),
            'classroom_id' => fake()->randomElement(Classroom::pluck('id')),
            'time' => fake()->time(),
            'day' => fake()->randomElement( ['M-W-F', 'T-TH', 'S']),
            'teacher_id' => fake()->randomElement(Teacher::pluck('id'))
        ];
    }
}
