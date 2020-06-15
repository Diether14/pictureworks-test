<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AppRepository;
use App\Repositories\Interfaces\AppRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AppRepositoryInterface::class, 
            AppRepository::class
        );
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
