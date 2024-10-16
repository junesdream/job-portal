<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Company::create([
            'name' => 'TechCorp',
            'description' => 'A leading tech company',
            'location' => 'Berlin',
            'industry' => 'Technology',
            'founded_at' => '2010-01-01',
            'website' => 'https://techcorp.com',
        ]);

        Company::create([
            'name' => 'FinTech Solutions',
            'description' => 'Financial technology services',
            'location' => 'Hamburg',
            'industry' => 'Finance',
            'founded_at' => '2015-05-05',
            'website' => 'https://fintech.com',
        ]);
    }
}
