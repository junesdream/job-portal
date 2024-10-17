<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; 
use Illuminate\Support\Facades\Gate;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use App\Policies\JobPolicy;
use App\Policies\CompanyPolicy;
use App\Policies\CategoryPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Die Zuordnung von Modellen zu Policies
     *
     * @var array
     */
    protected $policies = [
        \App\Models\Job::class => \App\Policies\JobPolicy::class,
        Company::class => CompanyPolicy::class,
        Category::class => CategoryPolicy::class,
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
