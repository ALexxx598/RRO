<?php

namespace App\Providers;

use App\RROTracking\DrugStore\DrugStoreRepository;
use App\RROTracking\DrugStore\DrugStoreRepositoryInterface;
use App\RROTracking\DrugStore\DrugStoreService;
use App\RROTracking\DrugStore\DrugStoreServiceInterface;
use Illuminate\Support\ServiceProvider;

class DrugStoreServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DrugStoreServiceInterface::class, DrugStoreService::class);
        $this->app->singleton(DrugStoreRepositoryInterface::class, DrugStoreRepository::class);
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
