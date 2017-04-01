<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //https://github.com/laravel/framework/issues/17508
        //https://github.com/laravel/docs/blob/5.4/migrations.md
        Schema::defaultStringLength(191);

        //https://github.com/guirisan/app/issues/10
        //
        view()->composer('planta._dropdown', function($view){
            $view->with('plantes_dropdown_data', \App\Planta::pluck('nom','id'));
        });

        view()->composer('plaga._dropdown', function($view){
            $view->with('plagues_dropdown_data', \App\Plaga::pluck('nom','id'));
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
