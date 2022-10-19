<?php

namespace App\Repo\Repositories;

use App\Models\Client;
use App\Repo\Interfaces\ClientInteface;
use Exception;

class  ClientRepo  implements ClientInteface {
    public function create()
    {
        return view('admin.clients.create');
    }
    public function StoreClient($request){
        $this->StoreClientInDatabse($request);
        // return $this->getClientIndex();
        return redirect()->route('clients.index');
    }


    public function StoreClientInDatabse($request){
        try{
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            return $client  = Client::create($data);
        }catch(Exception $e){
            return $e;
        }
    }

    public function getClientIndex(){
        $clients = Client::paginate(10);
        return view('admin.clients.index',compact('clients'));
    }
}
