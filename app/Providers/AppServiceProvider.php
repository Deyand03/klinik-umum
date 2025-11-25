<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // LOGIC PAKSA HTTPS DI VERCEL
        // Kalau environment-nya bukan 'local', paksa semua link jadi HTTPS
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
