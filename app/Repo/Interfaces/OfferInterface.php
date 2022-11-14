<?php

namespace App\Repo\Interfaces;

interface  OfferInterface {
    public function create();
    public function StoreOffer($data);
    public function getOfferIndex();
    public function ChangeStatus($admin);
    public function ShowOfferDetails($admin);
    public function editAdmin($admin);
    public function updateAdmin($request , $admin);
    public function deleteAdmin($admin);
    public function getAjaxData();
    public function getAuthenticatable();
}
