<?php

namespace App\Repo\Interfaces;

interface  ClientInteface {
    public function create();
    public function StoreClient($data);
    public function getClientIndex();
    public function ChangeStatus($Client);
}
