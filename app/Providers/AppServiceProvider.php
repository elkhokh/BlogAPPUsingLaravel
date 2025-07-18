<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void// work before the boot and save the all servercontinar for laravel
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void// to save all data for config
    {
        //to solve the problem of bootstrap because the new version of laravel use telwaind
        Paginator::useBootstrap();
    }
}
