<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Start Seed The Areas \n";
        $areas = ['الصحافه' , 'الرياض', 'جبره' , 'الازهري' , 'المهندسين' , 'الفتيحاب'];
        foreach ($areas as $value) {
            Area::create([
                'name' => $value, 
                'description' => $value, 
            ]);
        }
        echo "End Seed The Areas \n";
    }
}
