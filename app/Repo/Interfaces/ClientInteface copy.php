<?php

namespace App\Repo\Interfaces;

interface  ClientInteface {
    public function create();
    public function StoreClient($data);
    public function getClientIndex();
    public function ChangeStatus($Client);
    public function editClient($client);
    public function updateClient($request , $client);
    public function deleteClient($client);
}
