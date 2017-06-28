<?php

namespace Wj\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Wj\Timezones\TimezonesController');

        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/wj/timezones'),
        ]);
    }
}
