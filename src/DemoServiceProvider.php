<?php

namespace Tamnx\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        include __DIR__.'/model/model.php';
        include __DIR__.'/repository/repository.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->make(CalculatorController::class);
       $this->loadViewsFrom(__DIR__.'/views', 'views');
    }
}
