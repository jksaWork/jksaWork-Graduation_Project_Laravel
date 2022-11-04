<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminsRequest;
use App\Models\Admin;
use App\Repo\Interfaces\AdminIterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $interface;
    public function __construct(AdminIterface $interface)
    {
        $this->interface = $interface;
    }
    public function index()
    {
        return $this->interface->getAdminsIndex();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->interface->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminsRequest $request)
    {
        return $this->interface->StoreAdmin($request);
    }


    public function data(){
        return $this->interface->getAjaxData();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(request()->has('status')) return $this->interface->ChangeStatus(Admin::findOrfail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($admin_id)
    {
        $admin = Admin::find($admin_id);
        return $this->interface->editAdmin($admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminsRequest $request, $id)
    {
        // return $request;
        $admin = Admin::find($id);
        return $this->interface->updateAdmin($request , $admin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // dd(Admin::find($id));
        return $this->interface->deleteAdmin(Admin::findOrfail($id));
    }
}
