<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Traits\apiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiOnwerAuthControler extends Controller
{
    use apiResponse;
    public function regsiterClient(Request  $request)
    {
        // Validate The Request
        $validaor = validator($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'password' => 'required',
            'phone' => 'required',
        ]);
        // Retun Response If Validator fails
        if ($validaor->fails()) return $this->ErrorMessage($validaor->errors() , null , 401);
        //  Client Crete
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $Owner  = Owner::create($data);
        // Create Token
        $OwnerToken = $Owner->createToken('token')->plainTextToken;
        // Return Success Repsone
        $data =  [
            'client' => $Owner,
            'token' => $OwnerToken,
        ];
        return $this->SeccuessMessage($data);
    }

    public function loginClient(Request  $request)
    {
        // Validate The Request
        $validaor = validator($request->all(), [
            'email' => 'required|email|exists:owners,email',
            'password' => 'required',
        ]);
        // Retun Response If Validator fails
        if ($validaor->fails()) return $this->ErrorMessage($validaor->errors());
        // find Client
        $Owner = Owner::where('email', $request->email)->first();
        if (Hash::check($request->password, $Owner->password)) {
            // Create Token
            $Ownertoken = $Owner->createToken('token')->plainTextToken;
            // Return Success Repsone
            $data =  [
                'client' => $Owner,
                'token' => $Ownertoken,
            ];
            return $this->SeccuessMessage($data);
        } else {
            return $this->ErrorMessage("Invalid Password" , null ,422  );
        }
    }
}
