<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerAuthController extends Controller
{
    public function index(){
        return view('owner.auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|exists:owners,email',
            'password' => 'required',
        ]);
        if (Auth::guard('owner')->attempt(["email" => $request->email , 'password' => $request->password])) {
            drakify('sccuess');
            $request->session()->regenerate();
            return redirect()->route('owner.dashboard');
        }
        else {
            drakify('error');
            return redirect()->back();
        }
    }
}
