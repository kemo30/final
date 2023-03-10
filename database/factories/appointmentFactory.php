<?php

namespace Database\Factories;

use App\Models\doctors;
use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;

class appointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'doctor' => doctors::all()->random()->id,
            'service' => service::all()->random()->id,
            'message' => $this->faker->text(),
            'date' => $this->faker->dateTimeBetween('-30 day' , '+30 day')->format('m/d/Y'),
        ];
    }
}
