<?php

namespace Seymur\Clockworksms;

use Illuminate\Support\ServiceProvider;

class ClockWorkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('seymur-clockworksms', function () {
            return new Clockworksms();
        });
    }
}
