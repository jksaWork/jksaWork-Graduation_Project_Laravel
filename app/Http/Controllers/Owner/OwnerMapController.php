<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerMapController extends Controller
{
    public function Map(){
        $orders = \App\Models\Offer::latest()->get();
        $marker = $orders->pluck('long' , 'lat');
        // Check If Request Is Comming From  Goggle Map Or note
        if(request()->ajax() || request()->has('google_map')){
            return response()->json([
                'markers' => $orders,
            ]);
        }
        return view('owner.offers.map' , compact('orders' , 'marker'));

    }
}
