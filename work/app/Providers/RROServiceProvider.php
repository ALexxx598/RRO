<?php

namespace App\Providers;

use App\RROTracking\RRO\RRORepository;
use App\RROTracking\RRO\RRORepositoryInterface;
use App\RROTracking\RRO\RROService;
use App\RROTracking\RRO\RROServiceInterface;
use Illuminate\Support\ServiceProvider;

class RROServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RROServiceInterface::class, RROService::class);
        $this->app->singleton(RRORepositoryInterface::class, RRORepository::class);
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
