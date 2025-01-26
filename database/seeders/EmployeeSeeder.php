<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companiesIds = Company::all()->pluck('id')->toArray();
        $jobsIds = Job::all()->pluck('id')->toArray();

        Employee::factory(1000)->create(
            [
            'company_id' => fn() => fake()->randomElement($companiesIds),
            'job_id' => fn() => fake()->randomElement($jobsIds),
            ]
        );
    }
}
