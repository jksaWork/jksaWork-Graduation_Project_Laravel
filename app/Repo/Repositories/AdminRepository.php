<?php

namespace App\Repo\Repositories;

use App\Models\Admin;
use App\Models\AgentUser;
use App\Models\Client;
use App\Models\Owner;
use App\Models\Role;
use App\Repo\Interfaces\AdminIterface;
use App\Repo\Interfaces\ClientInteface;
use App\Repo\Interfaces\OwnerInterFace;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class  AdminRepository implements AdminIterface {
    public function create()
    {
        $roles = Role::all();
        return view('admin.admins.create' , compact('roles'));
    }
    public function StoreAdmin($request){
        $this->StoreAdminInDatabse($request);
        return redirect()->route('users.index');
    }

    public function StoreAdminInDatabse($request){
        try{
            // dd();
            $data = $request->except('_token' , 'role_id');
            $data['password'] = bcrypt($request->password);
            // dd($this->getAuthenticatable());
            $admin  = $this->getAuthenticatable()::create($data);
            // dd('hello' , $admin, $this->getAuthenticatable());
            if($this->getAuthenticatable() == Admin::class){

                // $admin->attachRoles(['admin', $request->role_id]);
            }
            session()->flash('success', 'Insert Admin Was Done');
            }catch(Exception $e){
            dd($e);
        }
    }

    public function getAdminsIndex(){
        $Admins = Admin::whenSerach()->paginate(10);
        // dd();
        $roles = Role::whereNotIn('name' , ['admin'])->get();
        return view('admin.admins.index',compact('Admins' , 'roles'));
    }

    public function getAjaxData(){
        $query = $this->getAuthenticatable()::query(); #->whenHasRole(request()->role_id);

        return  DataTables::of($query)
            ->addColumn('record_select', 'admin.admins.data_table.record_select')
            ->editColumn('created_at', function ( $user) {
                return $user->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.admins.data_table.actions')
            ->addColumn('roles' , function($admin){
                return view('admin.admins.data_table.roles', compact('admin'));
            })
            ->addColumn('status' , function($admin){
                return view('admin.admins.data_table.status', compact('admin'));
            })
            ->rawColumns(['record_select', 'actions' , 'roles'])
            ->toJson();

    }


    public function ChangeStatus($Owner){
        // Change The Status
        $Owner->ChangeStatus();
        session()->flash('success' , 'Status  Was Change Succesfuly');
        return redirect()->back();
    }

    public function editAdmin($admin){
        $roles = Role::all();
        return view('admin.admins.edit' , compact('admin','roles'));
    }

    public function updateAdmin($request,  $admin){
        // dd($request , $client);
        try{
            $data = $request->except('_token' , '_method' , 'role_id');
            $data['password'] = bcrypt($request->password);
            $admin->update($data);
            // dd($admin->roles);
            $admin->detachRoles($admin->roles);
            $admin->attachRoles(['admin', $request->role_id]);
            session()->flash('success' , 'Update Admin Was Done Succesfuly');
            return redirect()->route('users.index');
        }catch(Exception $e){
            dd($e);
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }

    public function deleteAdmin($Owner)
    {
        try{
            $Owner->delete();
            session()->flash('success' , 'Admin  Was Delete Succesfuly');
            return redirect()->back();
        }catch(Exception $e){
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }

    public function getAuthenticatable(){
        return !auth()->guard('web')->check() ? Admin::class : AgentUser::class;
    }
}
