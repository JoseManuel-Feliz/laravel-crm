<?php

namespace Database\Factories;

use App\Models\Industry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->company(),
            'vat_num' => fake()->unique()->vat(),
            'phone' => fake()->unique()->e164PhoneNumber(),
            'email' => fake()->unique()->companyEmail(),
            'city' => fake()->city(),
            'region' => fake()->state(),
            'industry_id' => null,
        ];
    }
}
