<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model= Student::class;
    public function definition(): array
    {
        return [
            'name' => 'RJ', 
            'course' => 'BSIT',
            'year' => 4, 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
