<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTitles = [
            'Software Developer',
            'Data Scientist',
            'Project Manager',
            'UX Designer',
            'Business Analyst',
            'DevOps Engineer',
            'Database Administrator',
            'System Architect',
            'Quality Assurance Engineer',
            'Cybersecurity Specialist',
        ];

        foreach ($jobTitles as $job) {
            $newjob = new Job();
            $newjob->title = $job;
            $newjob->save();
        }
    }
}
