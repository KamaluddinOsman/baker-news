<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        $images = [
            'best1.jpg', 'best2.jpg', 'best3.jpg', 'best4.jpg',
            'blog1.jpg', 'blog2.jpg', 'blog3.jpg', 'blog4.jpg',
            'final1.jpg', 'final2.jpg',
            'last1.jpg', 'last2.jpeg', 'last3.jpg', 'last4.jpg',
            'news1.jpg', 'news2.jpg', 'news3.jpg', 'news4.jpg',
            'slide1.jpg', 'slide2.jpg', 'slide3.jpg', 'slide4.jpg',
        ];

        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'author' => 'Admin',
            'image' => $this->faker->randomElement($images),
            'type_id' => $this->faker->numberBetween(1,6),
            'important' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}