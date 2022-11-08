<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminAuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentAuthController extends Controller
{
    public function getlogin(){
        return view('agent.auth.login');
    }

    public function login(AdminAuthRequest $request){
        if (Auth::guard('web')->attempt(["email" => $request->email , 'password' => $request->password])) {
            drakify('sccuess');
            $request->session()->regenerate();
            return redirect()->route('agent.dashboard');
        }
        else {
            drakify('error');
            return redirect()->back();
        }
    }
}
