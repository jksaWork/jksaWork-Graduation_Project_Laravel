<?php

namespace Database\Seeders;

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
        // $this->call(LaraTrustSeeder::class);
        // User::factory(10)->create();
        Client::factory(1)->create();
        Owner::factory(1)->create();
    }
}
