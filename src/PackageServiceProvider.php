<?php

namespace Lo2s\LaravelPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/_config/acquiring.php' => config_path('acquiring.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/_migrations');
    }
}
