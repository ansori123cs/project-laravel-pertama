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
            'title' => $this->faker->sentence(mt_rand(2, 6)),
            'slug' => $this->faker->slug(),
            'img' => 'pantai-' . mt_rand(1, 4) . '.jpg',
            'exerpt' => $this->faker->paragraph(mt_rand(2, 3)),
            // 'body' => $this->faker->paragraph(mt_rand(6,10)),
            'body' => collect($this->faker->paragraphs(mt_rand(10, 20)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1, 4),
            'user_id' => mt_rand(1, 5)
        ];
    }
}
