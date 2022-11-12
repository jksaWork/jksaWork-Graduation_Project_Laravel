<?php

namespace Database\Seeders;

use App\Models\offerType;
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

        $type = ['شقه مفروشه', "منزل ارضي" ,  "شقه عاديه ", "قطعه ارض" ];
        foreach ($type as $key => $value) {
            offerType::create(
                [
                    'name' => $value,
                ]
                );
        }
        info('Service Seeder');
    }
}
