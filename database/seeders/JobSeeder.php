<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use Carbon\Carbon; 

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'title' => 'Software Engineer',
            'description' => 'Develop and maintain web applications',
            'salary' => 60000,
            'location' => 'Berlin',
            'company_id' => 1, // Gehe sicher, dass du passende company_id verwendest
            'category_id' => 1, // Gehe sicher, dass du passende category_id verwendest
        ]);

        Job::create([
            'title' => 'Product Manager',
            'description' => 'Manage the product development lifecycle',
            'salary' => 70000,
            'location' => 'Hamburg',
            'company_id' => 1,
            'category_id' => 2,
        ]);
    }
}
