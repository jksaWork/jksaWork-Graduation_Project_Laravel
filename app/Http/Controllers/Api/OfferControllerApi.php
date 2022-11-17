<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class OfferControllerApi extends Controller
{
    use apiResponse;
    public function index(){
        $offers = Offer::with('Agent' , 'Type' , 'Area' , 'Owner')->paginate(10);
        return $this->SeccuessMessage(OfferResource::collection($offers));
    }

    public function show($id){
        $offer = Offer::findOrFail($id);
        return $this->SeccuessMessage(new OfferResource($offer));
    }
}
