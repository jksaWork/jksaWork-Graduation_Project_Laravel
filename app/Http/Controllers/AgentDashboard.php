<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentDashboard extends Controller
{
    public function index()
    {
        $data['charttwo'] = DB::select('SELECT Count(id) as `Data` ,status as label FROM `offers` where agent_id = ?   GROUP by status', [auth()->user()->agent_id]);
        $data['chartOne'] = DB::select('SELECT DAYNAME(created_at) as label , Count(id) as Data FROM offers where agent_id = ? GROUP BY DAYNAME(created_at)', [auth()->user()->agent_id]);
        $data['offers']  = Offer::where('agent_id', auth()->user()->agent_id)->get();
        return view('agent.dashboard', $data);
    }
}