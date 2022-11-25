<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferResource;
use App\Models\Client;
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

    public function ToggleFavorateToClient($offer_id){
        Client::find(auth()->user()->id)->FavorateOffers()->toggle($offer_id);
        return $this->SeccuessMessage('Toogel Done Success');
    }

    public function FavirateOffer(){
        $offers_ids = Client::find(auth()->user()->id)->FavorateOffers->pluck('id');
        $offers = Offer::with('Agent' , 'Type' , 'Area' , 'Owner')->find($offers_ids);
        return $this->SeccuessMessage($offers);
    }

    public function MarkerInMap(){
        $offers = Offer::select('lat' , 'long' , 'location' , 'main_image')->get();
        return $this->SeccuessMessage($offers);
    }
}
