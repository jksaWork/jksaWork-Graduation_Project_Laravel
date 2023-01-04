<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class AssingOrderToClientController extends Controller
{
    public function index($id){
        $offer = Offer::find($id);
        $offer->Client_id =  request()->offer_client;
        $offer->save();
        return redirect()->back();
    }
}
