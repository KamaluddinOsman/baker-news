<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            'best1.jpg', 'best2.jpg', 'best3.jpg', 'best4.jpg',
            'blog1.jpg', 'blog2.jpg', 'blog3.jpg', 'blog4.jpg',
            'final1.jpg', 'final2.jpg',
            'last1.jpg', 'last2.jpeg', 'last3.jpg', 'last4.jpg',
            'news1.jpg', 'news2.jpg', 'news3.jpg', 'news4.jpg',
            'slide1.jpg', 'slide2.jpg', 'slide3.jpg', 'slide4.jpg',
        ];
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
        ];
    }
}
