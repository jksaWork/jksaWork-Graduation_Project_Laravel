<?php

namespace App\Repo\Repositories;

use App\Models\Client;
use App\Models\Owner;
use App\Repo\Interfaces\ClientInteface;
use App\Repo\Interfaces\OwnerInterFace;
use Exception;

class  OwnerRepository implements OwnerInterFace {
    public function create()
    {
        return view('admin.owners.create');
    }
    public function StoreOwner($request){
        $this->StoreClientInDatabse($request);
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

    public function getOwnerIndex(){
        $Owners = Owner::whenSerach()->paginate(10);
        return view('admin.owners.index',compact('Owners'));
    }


    public function ChangeStatus($client){
        // Change The Status
        $client->ChangeStatus();
        return redirect()->route('clients.index');
    }

    public function editOwner($client){
        return view('admin.clients.edit' , compact('client'));
    }

    public function updateOwner($request,  $client){
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

    public function deleteOwner($client)
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
