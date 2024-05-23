<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'instructor' => $this->faker->name,
            'courseHead' => $this->faker->name,
        ];
    }
}
