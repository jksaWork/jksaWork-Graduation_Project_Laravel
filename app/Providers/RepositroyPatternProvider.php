<?php

namespace App\Providers;

use App\Repo\Interfaces\AdminIterface;
use App\Repo\Interfaces\ClientInteface;
use App\Repo\Interfaces\OwnerInterFace;
use App\Repo\Repositories\AdminRepository;
use App\Repo\Repositories\ClientRepo;
use App\Repo\Repositories\OwnerRepository;
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
        // Bind The Client Interface With Client Repository
        $this->app->bind(ClientInteface::class , ClientRepo::class);
        // Bind The Owner IinterFace With Owner Repo
        $this->app->bind(OwnerInterFace::class, OwnerRepository::class);
        // Bind The Admin IinterFace With Admin Repo
        $this->app->bind(AdminIterface::class, AdminRepository::class);
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
