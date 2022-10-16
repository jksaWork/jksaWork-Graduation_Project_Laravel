<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    use apiResponse;
    public function index(){
        $areas = Area::get();
        return $this->SeccuessMessage($areas);
    }
}
