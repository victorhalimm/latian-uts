<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'description' => fake()->sentence(50),
            'email_verified_at' => now(),
        ];
    }

    // $table->id();
    // $table->string('name');
    // $table->string('description');
    // $table->string('created_by');
    // $table->string('image_url');
    // $table->string('category');
    // $table->timestamps();
}
