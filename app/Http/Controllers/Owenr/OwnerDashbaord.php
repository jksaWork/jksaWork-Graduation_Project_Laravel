<?php

namespace App\Http\Controllers\Owenr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerDashbaord extends Controller
{
    public function index(){
        return view('owner.dashbaord.index');
    }
}
