<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industriesIds = Industry::all()->pluck('id')->toArray();

        Company::factory(500)->create(
            [
            'industry_id' => fn() => fake()->randomElement($industriesIds),
            ]
        );
    }
}
