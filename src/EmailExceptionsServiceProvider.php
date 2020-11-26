<?php
namespace Bengels\LaravelEmailExceptions;

use Illuminate\Support\ServiceProvider;

/**
 * Class EmailExceptionsServiceProvider
 *
 * @package Bengels\LaravelEmailExceptions
 */
class EmailExceptionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'laravelEmailExceptions');
        $this->publishes(
            [__DIR__.'/config/laravelEmailExceptions.php' => config_path('laravelEmailExceptions.php')],
            'config'
        );
        $this->publishes(
            [__DIR__.'/views' => resource_path('views/vendor/laravelEmailExceptions')],
            'views'
        );
        $this->publishes(
            [__DIR__.'/tests' => base_path('tests/Unit')],
            'tests'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/laravelEmailExceptions.php',
            'laravelEmailExceptions'
        );
    }
}
