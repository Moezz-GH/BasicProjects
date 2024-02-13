<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categories;
use App\Models\Events;

class EventsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Events::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'location' => $this->faker->word(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'capacity' => $this->faker->word(),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'categories_id' => Categories::factory(),
        ];
    }
}
