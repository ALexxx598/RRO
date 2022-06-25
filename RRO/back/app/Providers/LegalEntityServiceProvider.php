<?php

namespace App\Providers;

use App\RROTracking\LegalEntity\LegalEntityRepository;
use App\RROTracking\LegalEntity\LegalEntityRepositoryInterface;
use App\RROTracking\LegalEntity\LegalEntityService;
use App\RROTracking\LegalEntity\LegalEntityServiceInterface;
use Illuminate\Support\ServiceProvider;

class LegalEntityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LegalEntityServiceInterface::class, LegalEntityService::class);
        $this->app->singleton(LegalEntityRepositoryInterface::class, LegalEntityRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
