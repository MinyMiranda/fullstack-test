<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'text' => $this->faker->sentence(490),
            'preview' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'image'=> 'https://source.unsplash.com/640x640/?rock-concert',
        ];
    }
}
