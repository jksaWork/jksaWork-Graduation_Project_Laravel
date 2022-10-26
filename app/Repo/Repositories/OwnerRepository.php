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
        $this->StoreOwnerInDatabse($request);
        return redirect()->route('owners.index');
    }

    public function StoreOwnerInDatabse($request){
        try{
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            return $Owner  = Owner::create($data);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function getOwnerIndex(){
        $Owners = Owner::whenSerach()->paginate(10);
        return view('admin.owners.index',compact('Owners'));
    }


    public function ChangeStatus($Owner){
        // Change The Status
        $Owner->ChangeStatus();
        session()->flash('success' , 'Status  Was Change Succesfuly');
        return redirect()->route('owners.index');
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

    public function deleteOwner($Owner)
    {
        try{
            $Owner->delete();
            session()->flash('success' , 'Owners  Was Delete Succesfuly');
            return redirect()->route('owners.index');
        }catch(Exception $e){
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }
}
