<?php

namespace App\Providers;

use App\Team;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Accounts for soft-model cascading deletes on associated Registration objects for a given Team.
         */
        Team::deleting(function ($team) {
            $team->registration->delete();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
