<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kegiatan>
 */
class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kegiatan' => fake()->sentence(4), // 
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode(''),
            'gambar' => 'default.jpg',
            'poster' => 'default.jpg',
            'slug' => fake()->slug()
        ];
    }
}
