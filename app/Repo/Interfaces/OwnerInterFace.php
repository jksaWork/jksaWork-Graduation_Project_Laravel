<?php

namespace App\Repo\Interfaces;

interface  OwnerInterFace {
    public function create();
    public function StoreOwner($data);
    public function getOwnerIndex();
    public function ChangeStatus($Owner);
    public function editOwner($Owner);
    public function updateOwner($request , $Owner);
    public function deleteOwner($Owner);
}
