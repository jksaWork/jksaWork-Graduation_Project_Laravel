<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\AgentUser;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'name' => 'Test Agent',
            'phone' => '0915477450',
            'location' => 'السووق العربي',
            'description' => 'وكاله ابراهيم العقاريه للعقارت شقق المفروشه',
            'long' => '15.2131322',
            'lat' => '35.12213123',
        ];
        $agent = Agent::create($data);

        $userData = [
            'name' => 'Test Agent',
            'phone' => '0915477450',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('123456'),
            'agent_id' => $agent->id,
        ];
        AgentUser::create($userData);
    }
}
