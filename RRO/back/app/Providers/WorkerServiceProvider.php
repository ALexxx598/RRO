<?php

namespace App\Providers;

use App\RROTracking\Worker\WorkerRepository;
use App\RROTracking\Worker\WorkerRepositoryInterface;
use App\RROTracking\Worker\WorkerService;
use App\RROTracking\Worker\WorkerServiceInterface;
use Illuminate\Support\ServiceProvider;

class WorkerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WorkerServiceInterface::class, WorkerService::class);
        $this->app->singleton(WorkerRepositoryInterface::class, WorkerRepository::class);
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
