<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $movie = Movie::factory()->create();

        return [
            'title' => fake()->text(30),
            'description' => fake()->paragraph,
            'cover' => fake()->imageUrl(),
            'release_date' => fake()->date(),
            'mediable_id' => $movie->id,
            'mediable_type' => Movie::class
        ];
    }
}
