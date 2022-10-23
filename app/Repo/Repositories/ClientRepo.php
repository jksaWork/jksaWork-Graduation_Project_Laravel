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
        $clients = Client::whenSerach()->paginate(10);
        return view('admin.clients.index',compact('clients'));
    }


    public function ChangeStatus($client){
        // Change The Status
        $client->ChangeStatus();
        return redirect()->route('clients.index');
    }

    public function editClient($client){
        return view('admin.clients.edit' , compact('client'));
    }

    public function updateClient($request,  $client){
        // dd($request , $client);
        try{
            $data = $request->except('_token' , '_method');
            $data['password'] = bcrypt($request->password);
            $client->update($data);
            session()->flash('success' , 'Update Client Was Done Succesfuly');
            return redirect()->route('clients.index');
        }catch(Exception $e){
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }

    public function deleteClient($client)
    {
        try{
            $client->delete();
            session()->flash('success' , 'Client Was Delete Succesfuly');
            return redirect()->route('clients.index');
        }catch(Exception $e){
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }
}
