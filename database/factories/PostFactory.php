<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title' => fake()->sentence(),
            'short_content' => fake()->sentence(5),
            'image' => 'post-photos/spark.jpg',
            'content' => fake()->paragraphs(15,true),
            'user_id' => 1, 
            'category_id' => rand(1,4),
        ];
    }
}
