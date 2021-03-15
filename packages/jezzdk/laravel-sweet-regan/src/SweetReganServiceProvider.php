<?php

namespace Jezzdk\LaravelSweetRegan;

use Illuminate\Support\ServiceProvider;

class SweetReganServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sweet-regan.php', 'sweet-regan');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sweet-regan.php' => config_path('sweet-regan.php'),
            ], 'sweet-regan-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/sweet-regan'),
            ], 'sweet-regan-views');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sweet-regan');

        //$this->loadRoutesFrom("{$this->package->basePath('/../routes/')}{$routeFileName}.php");
    }
}
