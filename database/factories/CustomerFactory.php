<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $type = $this->faker->randomElement(['I', 'B']); //Create a data random from I and B
        $name = $type == 'I' ? $this->faker->name : $this->faker->company(); // If type equals to I it will general name and if not it will generate company name

        return [
            //

            'name'              => $name,
            'type'              => $type,
            'email'             => $this->faker->email(),
            'address'           => $this->faker->streetAddress(),
            'city'              => $this->faker->city(),
            'state'             => $this->faker->state(),
            'postal_code'       => $this->faker->postcode(),
        ];
    }
}
