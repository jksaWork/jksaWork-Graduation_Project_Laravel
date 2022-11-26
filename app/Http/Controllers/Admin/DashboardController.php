<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // $data['offers'] = 'jksa';

        $data['chartOne'] = DB::select('SELECT DAYNAME(created_at) as label , Count(id) as Data FROM offers  GROUP BY date(created_at)');
        $data['charttwo'] = DB::select('SELECT Count(id) as `Data` ,status as label FROM `offers`   GROUP by status' );
        return view('admin.dashboard.index' ,$data);
    }
}
