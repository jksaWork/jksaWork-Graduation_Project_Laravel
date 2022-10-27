<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Area;
use App\Models\Client;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaraTrustSeeder::class);
        Admin::factory(1)->create();
        Client::factory(1)->create();
        Owner::factory(1)->create();
        $this->call(
           [ ServiceSeeder::class,
            AreaSedder::class,]
        );
    }
}
