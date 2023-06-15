<?php

namespace Database\Factories;

use App\Models\Container;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collect>
 */
class CollectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->first()->id,
            'container_id' => Container::all()->random()->first()->id,
            'status_id' => 6,
            'lng' => fake()->longitude(),
            'lat' => fake()->latitude(),
            'created_at' => fake()->dateTimeThisYear(max:now()->addMonths(7)),
        ];
    }
}
