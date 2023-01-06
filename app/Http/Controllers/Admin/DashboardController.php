<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Offer;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $data['charttwo'] = DB::select('SELECT Count(id) as `Data` ,status as label FROM `offers`   GROUP by status' );
        $data['chartOne'] = DB::select('SELECT DAYNAME(created_at) as label , Count(id) as Data FROM offers  GROUP BY DAYNAME(created_at)');
        $sum = collect([Offer::count() , Client::count() , Owner::count()]);
        $data['recored'] =$sum->map(fn($el) => floor($el / $sum->sum() * 100));
        return view('admin.dashboard.index' ,$data);
    }

    public function getIndex(){
        return view('welcome');
    }
}
