<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Route::macro('crud', function ($model, $controller){
            $plural = Str::plural($model);

            Route::get($plural.'/{'.$model.'}/show', [$controller, 'show'])->name($plural.'.show');
            Route::get($plural.'/change-status', [$controller, 'change'])->name($plural.'.change');
            Route::resource($plural, $controller)->except('show');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
