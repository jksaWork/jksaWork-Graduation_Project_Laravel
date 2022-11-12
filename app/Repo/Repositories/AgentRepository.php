<?php

namespace App\Repo\Repositories;

use App\Models\Admin;
use App\Models\Agent;
use App\Models\AgentUser;
use App\Models\Attachments;
use App\Models\Client;
use App\Models\Owner;
use App\Models\Role;
use App\Repo\Interfaces\AdminIterface;
use App\Repo\Interfaces\AgentIterface;
use App\Repo\Interfaces\ClientInteface;
use App\Repo\Interfaces\OwnerInterFace;
use Exception;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class  AgentRepository implements AgentIterface {
    public function create()
    {
        // $roles = Role::all();
        // dd('jksa');
        return view('admin.agents.create');
    }
    public function StoreAgent($request){
        $this->StoreAgentInDatabse($request);
        return redirect()->route('agent.index');
    }

    public function StoreAgentInDatabse($request){
        try{
            // Begin Transaction
            DB::beginTransaction();
            // Init Sub Agent User Data
            $agent = $this->saveAgentData($request);
            // Save Agent User  Data
            $this->saveAgentUser($request , $agent->id);
            $this->HandelAgentFiles($request->agents_files , $agent);
            session()->flash('success', 'Insert Agent And Agent User Was Done');
            DB::commit();
            return route('agent.index');
        }catch(Exception $e){
            DB::rollBack();
            dd($e);
        }
    }

    public function getAgentsIndex(){
        // $Admins = Admin::whenSerach()->paginate(10);
        // $roles = Role::whereNotIn('name' , ['admin' , 'super_admin' , 'user'])->get();
        return view('admin.agents.index');
    }

    public function ShowAgentDetails($agent){
        return view('admin.agents.show' , compact('agent'));
    }

    public function getAjaxData(){
        $query = Agent::query(); #->whenHasRole(request()->role_id);
        return  DataTables::of($query)
            ->addColumn('record_select', 'admin.agents.data_table.record_select')
            ->editColumn('created_at', function (Agent $user) {
                return !$user->created_at ?:$user->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.agents.data_table.actions')
            ->addColumn('status' , function(Agent $admin){
                return view('admin.agents.data_table.status', compact('admin'));
            })
            ->addColumn('logo' , function(Agent $admin){
                return view('admin.agents.data_table.logo', compact('admin'));
            })
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }


    public function ChangeStatus($Owner){
        // Change The Status
        $Owner->ChangeStatus();
        session()->flash('success' , 'Status  Was Change Succesfuly');
        return redirect()->back();
    }

    public function editAgent($agent){
        // $roles = Role::all();
        return view('admin.agents.edit' , compact('agent'));
    }

    public function updateAgent($request, $agent){
        // dd($request , $client);
        try{
            $data = $request->except('_token' , '_method');
            $agent->update($data);
            session()->flash('success' , 'Update Agent Was Done Succesfuly');
            return redirect()->route('agent.index');
        }catch(Exception $e){
            dd($e);
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }

    public function deleteAgent($agent)
    {
        try{
            $agent->delete();
            session()->flash('success' , 'Admin  Was Delete Succesfuly');
            return redirect()->back();
        }catch(Exception $e){
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }

    public function saveAgentUser($request , $id) :void
    {
        $userData =  [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
            'agent_id' => 1,
        ];
        $admin  = AgentUser::create($userData);
        // dd($admin);
    }
    public function HandelAgentFiles($files , Agent $agent)
    {
        foreach ($files as $key => $value) {
            $name = $value->hashName();
            $value->store('agents/attachments', 'public');
            // I Do This For First Step
            $attachment  = new Attachments;
                // $attachment->attacheable = $agent->id;
                $attachment->url = $name;
                $agent->attachments()->save($attachment);
        }
    }

    public function saveAgentData($request): Agent
    {
        // file Upload
        $request->logo->store('agents' , 'public');
        $name = $request->logo->hashName();
        // init Aget User
        $userData =  [
            // 'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'location' => $request->location,
            'description' => $request->description,
            'long' => $request->long,
            'lat' => $request->lat,
            'logo' => $name
        ];
        $Agent = Agent::create($userData);
        return $Agent;
    }
}
