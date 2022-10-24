<?php

namespace App\Repo\Interfaces;

interface  OwnerInterFace {
    public function create();
    public function StoreOwner($data);
    public function getOwnerIndex();
    public function ChangeStatus($Client);
    public function editOwner($client);
    public function updateOwner($request , $client);
    public function deleteOwner($client);
}
