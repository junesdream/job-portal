<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // Vertrauenswürdige Proxies (optional)
        \App\Http\Middleware\TrustProxies::class,
        // Fehlerbehandlung bei Wartungsmodus
        \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // Validierung von Post-Größen
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Überprüfung auf CSRF-Schutz
        \App\Http\Middleware\VerifyCsrfToken::class,
        // Konvertierung von Leerzeichen in Zeichenketten
        \Illuminate\Foundation\Http\Middleware\TrimStrings::class,
        // Entfernung von leeren Attributen
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // CSRF-Schutz aktivieren
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    ];
}
