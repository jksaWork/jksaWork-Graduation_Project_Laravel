<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceReSource;
use App\Models\Service;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class ApiServiceController extends Controller
{
    use apiResponse;
    public function index(){
        $services = ServiceReSource::collection(Service::all());
        return $this->SeccuessMessage($services);
    }
}
