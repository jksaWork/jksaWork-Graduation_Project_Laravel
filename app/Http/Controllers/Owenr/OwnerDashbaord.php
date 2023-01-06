<?php

namespace App\Http\Controllers\Owenr;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OwnerDashbaord extends Controller
{
    public function index(){
        $offers  =Offer::where('owner_id' , auth()->user()->id)->get();
        return view('owner.dashbaord.index' , compact('offers'));
    }
}
