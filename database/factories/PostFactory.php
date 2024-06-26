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
            "image" => "https://source.unsplash.com/500x400/?kindness",
            "title" => $this->faker->sentence(mt_rand(2, 8)),
            "slug" => $this->faker->slug(),
            // "excerpt" => $this->faker->paragraph(),
            "body" => $this->faker->paragraph(mt_rand(5, 10)),
            "date" => $this->faker->date(),
            "user_id" => 1,
            "category_id" => mt_rand(1, 5),
        ];
    }
}
