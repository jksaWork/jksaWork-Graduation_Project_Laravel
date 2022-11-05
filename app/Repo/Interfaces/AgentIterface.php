<?php

namespace App\Repo\Interfaces;

use App\Models\Agent;

interface  AgentIterface {
    public function create();
    public function StoreAgent($data);
    public function ShowAgentDetails($data);
    public function getAgentsIndex();
    public function ChangeStatus($admin);
    public function editAgent($admin);
    public function updateAgent($request , $admin);
    public function deleteAgent($admin);
    public function getAjaxData();
    public function saveAgentUser($request , $id);
    public function saveAgentData($request );
    public function HandelAgentFiles($request , Agent $id);
}
