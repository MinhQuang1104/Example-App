<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

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
        //Date time format
        Blade::directive('datetime', function($expression) {
            $expression = trim($expression, '\'');
            $expression = trim($expression, '"');

            $dateObject = date_create($expression)->format('d/m/Y H:i:s');

            if(!empty($dateObject)) {
                return $dateObject;
            }
            return false;
        });
    }
}
