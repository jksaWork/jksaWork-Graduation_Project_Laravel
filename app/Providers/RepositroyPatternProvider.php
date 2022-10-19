<?php

namespace App\Providers;

use App\Repo\Interfaces\ClientInteface;
use App\Repo\Repositories\ClientRepo;
use Illuminate\Support\ServiceProvider;

class RepositroyPatternProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClientInteface::class , ClientRepo::class);
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
