<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $title = fake()->sentence();
        $slug = Str::slug($title, '-');
        return [

            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $title,
            'slug' =>  $slug,
            'description' =>  fake()->paragraph(),
            'excerpt' => fake()->paragraph(),
            'is_published' =>  fake()->boolean(),
            'min_to_read' => fake()->numberBetween(1, 10),
        ];
    }
}
