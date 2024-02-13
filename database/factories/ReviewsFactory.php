<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Events;
use App\Models\Reviews;

class ReviewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviews::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'rating' => $this->faker->word(),
            'comment' => $this->faker->text(),
            'date' => $this->faker->date(),
            'events_id' => Events::factory(),
        ];
    }
}
