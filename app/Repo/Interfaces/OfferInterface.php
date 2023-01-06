<?php

namespace App\Repo\Interfaces;

use App\Models\Offer;

interface  OfferInterface {
    public function create();
    public function StoreOffer($data);
    public function getOfferIndex();
    public function ChangeStatus($admin);
    public function ChangeOfferStatus(Offer $offer , $value);
    public function ShowOfferDetails($admin);
    public function editOffer($admin);
    public function updateOffer($request , $admin);
    public function deleteOffer($admin);
    public function getAjaxData();
    public function getAuthenticatable();
}
