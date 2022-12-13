<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all();

        return [
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'facebook' => $this->faker->email(),
            'website' => $this->faker->sentence(1) . 'com',
            'user_id' => $this->faker->unique()->numberBetween(1, $users->count())
        ];
    }
}
