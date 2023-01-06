<?php

namespace App\Http\Controllers;

use App\Models\Owner;
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

    public function getRegister (){
        return view('owner.auth.register');
    }

    public function register(Request $request){
        // return $request;
        $data = $request->validate([
            'password' => 'required|confirmed',
            'name' => 'required',
            'email' => 'required|unique:owners,email',
            'phone' => 'required',
        ]);
        // return $request;
        $Owner = Owner::create($data);
        $request->session()->regenerate();
        return redirect()->route('owner.dashboard');
    }
}
