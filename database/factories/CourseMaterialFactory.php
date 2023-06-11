<?php

namespace Database\Factories;

use App\Models\CourseSection;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseMaterial>
 */
class CourseMaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course_section = CourseSection::all()->random();

        return [
            'course_id' => $course_section->course_id,
            'course_section_id' => $course_section->id,
            'name' => fake()->text(30),
            'status' => fake()->randomElement(["ACTIVE", "NON_ACTIVE"]),
            'description' => fake()->paragraph(),
            'created_by' =>  User::all()->random()->id,
        ];
    }
}
