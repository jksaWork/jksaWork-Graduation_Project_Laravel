<?php

namespace App\Repo\Interfaces;

interface  AdminIterface {
    public function create();
    public function StoreAdmin($data);
    public function getAdminsIndex();
    public function ChangeStatus($admin);
    public function editAdmin($admin);
    public function updateAdmin($request , $admin);
    public function deleteAdmin($admin);
    public function getAjaxData();
}
