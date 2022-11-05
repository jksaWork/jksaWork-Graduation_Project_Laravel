<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function getlogin(){
        return view('admin.auth.login');
    }

    public function login(AdminAuthRequest $request){
        if (Auth::guard('admin')->attempt(["email" => $request->email , 'password' => $request->password])) {
            // dd('The Admin Is Login');
            drakify('sccuess');
            $request->session()->regenerate();
            return redirect()->route('dashboard');
            // return redirect()->intended('admin/dashbaord');
        }
        else {
            drakify('error');
            return redirect()->back();
        }
    }
}
