<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ['شراء', 'بيع', 'استبدال'];
        foreach ($services as  $value) {
            Service::create([
                'name' => $value, 
                'description' => $value, 
            ]);
        }
        info('Service Seeder');
    }
}
