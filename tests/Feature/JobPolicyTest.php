<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobPolicyTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function admin_can_create_job()
    {
        $company = Company::factory()->create();
        $category = Category::factory()->create();

        $admin = User::factory()->create(['role' => 'Admin']);
        $this->actingAs($admin);

        $response = $this->post('/jobs', [
            'title' => 'Test Job',
            'description' => 'Test Description',
            'salary' => 50000,
            'location' => 'Test Location',
            'company_id' => $company->id,
            'category_id' => $category->id,
        ]);

        $response->assertStatus(201);
    }

    #[Test]
    public function employer_can_create_job()
    {
        $company = Company::factory()->create();
        $category = Category::factory()->create();

        $employer = User::factory()->create(['role' => 'Employer']);
        $this->actingAs($employer);

        $response = $this->post('/jobs', [
            'title' => 'Test Job',
            'description' => 'Test Description',
            'salary' => 50000,
            'location' => 'Test Location',
            'company_id' => $company->id,
            'category_id' => $category->id,
        ]);

        $response->assertStatus(201);
    }

    #[Test]
    public function user_cannot_create_job()
    {
        $user = User::factory()->create(['role' => 'User']);
        $this->actingAs($user);

        $response = $this->post('/jobs', [
            'title' => 'Test Job',
            'description' => 'Test Description',
            'salary' => 50000,
            'location' => 'Test Location',
            'company_id' => 1,
            'category_id' => 1,
        ]);

        $response->assertStatus(403);
    }

    #[Test]
    public function guest_cannot_create_job()
    {
        $response = $this->post('/jobs', [
            'title' => 'Test Job',
            'description' => 'Test Description',
            'salary' => 50000,
            'location' => 'Test Location',
            'company_id' => 1,
            'category_id' => 1,
        ]);

        $response->assertStatus(403);
    }
}