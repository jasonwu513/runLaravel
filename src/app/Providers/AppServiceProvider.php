<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Logging\CreateGoogleCloudLogger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config(['logging.channels.googlecloud' => [
            'driver' => 'custom',
            'via' => CreateGoogleCloudLogger::class,
        ] ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
