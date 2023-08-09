<?php

namespace Database\Factories\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = strtolower(str_replace(' ', '-', $title));

        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraph
        ];
    }
}
