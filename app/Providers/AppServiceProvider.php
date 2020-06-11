<?php

namespace App\Providers;

use App\Observers\RecurrenceObserver;
use Illuminate\Support\ServiceProvider;
use App\Appointment;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Appointment::observe(RecurrenceObserver::class);
    }
}
