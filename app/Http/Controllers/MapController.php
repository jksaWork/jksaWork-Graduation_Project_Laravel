<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        $orders = \App\Models\Offer::latest()->get();
        $marker = $orders->pluck('long' , 'lat');
        // Check If Request Is Comming From  Goggle Map Or note
        if(request()->ajax() || request()->has('google_map')){
            return response()->json([
                'markers' => $orders,
            ]);
        }
        return view('offers.map' , compact('orders' , 'marker'));
    }
}