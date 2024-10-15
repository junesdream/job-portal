<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; 
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Die Zuordnung von Modellen zu Policies
     *
     * @var array
     */
    protected $policies = [
        App\Models\Job::class => App\Policies\JobPolicy::class,
        App\Models\Company::class => App\Policies\CompanyPolicy::class,
        App\Models\Category::class => App\Policies\CategoryPolicy::class,
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
