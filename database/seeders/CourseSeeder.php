<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('courses')->insert([
            [
                'name' => 'Pattern Software Design',
                'description' => fake()->sentence(50),
                'short_description' => fake()->sentence(2),
                'created_by' => fake()->name(),
                'image_url' => 'home-assets/jumbotron.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Agile Software Development',
                'description' => fake()->sentence(50),
                'short_description' => fake()->sentence(2),
                'created_by' => fake()->name(),
                'image_url' => 'home-assets/jumbotron.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Code Reengineering',
                'description' => fake()->sentence(50),
                'short_description' => fake()->sentence(2),
                'created_by' => fake()->name(),
                'image_url' => 'home-assets/jumbotron.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Human Computer Interaction',
                'description' => fake()->sentence(50),
                'short_description' => fake()->sentence(2),
                'created_by' => fake()->name(),
                'image_url' => 'home-assets/jumbotron.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User Experience',
                'description' => fake()->sentence(50),
                'short_description' => fake()->sentence(2),
                'created_by' => fake()->name(),
                'image_url' => 'home-assets/jumbotron.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User Experience for DIT',
                'description' => fake()->sentence(50),
                'short_description' => fake()->sentence(2),
                'created_by' => fake()->name(),
                'image_url' => 'home-assets/jumbotron.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
