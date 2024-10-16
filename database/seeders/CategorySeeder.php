<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Software Development',
            'description' => 'Jobs related to software engineering and development',
        ]);

        Category::create([
            'name' => 'Product Management',
            'description' => 'Jobs related to product lifecycle and management',
        ]);
    }
}
