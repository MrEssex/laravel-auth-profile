<?php

namespace MrEssex\LaravelAuthProfile;

use Illuminate\Support\ServiceProvider;

class AuthProfileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'laravelauthprofile');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/laravelauthprofile'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('MrEssex\LaravelAuthProfile\AuthProfileController');
    }
}
