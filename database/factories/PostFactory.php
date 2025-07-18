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
            //to create the fake data with use the faker library
            "title"=>$this->faker->sentence,
            "content"=>$this->faker->paragraph,
            "user_id"=> 5,
        ];
    }
}
