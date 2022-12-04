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
        $this->loadViewsFrom(__DIR__.'/views', 'email-exception');
        $this->publishes(
            [__DIR__.'/config/email-exception.php' => config_path('email-exception.php')],
            'config'
        );
        $this->publishes(
            [__DIR__.'/resources/views' => resource_path('views/vendor/email-exception')],
            'views'
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
            __DIR__.'/config/email-exception.php',
            'email-exception'
        );
    }
}
