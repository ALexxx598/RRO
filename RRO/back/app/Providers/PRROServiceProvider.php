<?php

namespace App\Providers;

use App\RROTracking\PRRO\PRRORepository;
use App\RROTracking\PRRO\PRRORepositoryInterface;
use App\RROTracking\PRRO\PRROService;
use App\RROTracking\PRRO\PRROServiceInterface;
use Illuminate\Support\ServiceProvider;

class PRROServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PRROServiceInterface::class, PRROService::class);
        $this->app->singleton(PRRORepositoryInterface::class, PRRORepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
