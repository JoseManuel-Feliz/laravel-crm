<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            'Technology',
            'Finance',
            'Healthcare',
            'Retail',
            'Education',
            'Manufacturing',
            'Construction',
            'Automotive',
            'Energy',
            'Telecommunications',
        ];

        foreach ($industries as $industry) {
            $newindustry = new Industry();
            $newindustry->name = $industry;
            $newindustry->save();
        }
    }
}
