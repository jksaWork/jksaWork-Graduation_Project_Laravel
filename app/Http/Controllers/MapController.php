<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        // $orders = \App\Models\Offer::latest()->get();
        if(auth()->guard('web')->check()){
            // dd(auth()->user()->agent_id);
            $orders = \App\Models\Offer::where('agent_id' , auth()->user()->agent_id)->latest()->get();
        }else{
            $orders = \App\Models\Offer::latest()->get();
        }
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
