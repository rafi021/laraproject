<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_type_id' => 1,
            'publisher_id' => Publisher::select('id')->get()->random()->id,
            'title' => $this->faker->title,
            'no_pages' => rand(10,100),
            'publishing_year' => $this->faker->year()
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (User $user) {
            dump($user);
        })->afterCreating(function (User $user) {
            dump($user);
        });
    }
}
