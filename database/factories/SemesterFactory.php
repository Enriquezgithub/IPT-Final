<?php

namespace Database\Factories;


use App\Models\Loader;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Semester>
 */
class SemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->randomElement(Student::pluck('id')),
            'loader_id' => fake()->randomElement(Loader::pluck('id'))
        ];
    }
}
