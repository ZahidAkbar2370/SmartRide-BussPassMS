<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pass>
 */
class PassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
            [
                "pass_number" => $this->faker->numberBetween(10000,100000),
                "full_name" => $this->faker->name(),
                "profile_image" => $this->faker->imageUrl(),
                "contact_number" => $this->faker->phoneNumber(),
                "email" => $this->faker->safeEmail(),
                "cnic_no" => "12323412312321",
                "category" => $this->faker->word(),
                "destination" => $this->faker->paragraph(),
                "from_location" => $this->faker->paragraph(),
                "cost" => $this->faker->numberBetween(200,900),
            ];
    }
}
