<?php

namespace App\Repo\Repositories;

use App\Models\Admin;
use App\Models\AgentUser;
use App\Models\Area;
use App\Models\Attachments;
use App\Models\Client;
use App\Models\Offer;
use App\Models\offerType;
use App\Models\Owner;
use App\Models\Role;
use App\Repo\Interfaces\AdminIterface;
use App\Repo\Interfaces\ClientInteface;
use App\Repo\Interfaces\OfferInterface;
use App\Repo\Interfaces\OwnerInterFace;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class  OfferRepository implements OfferInterface {
    public function create()
    {
        // return 'helo We Are begin ';
        try{
            $areas = Area::all();
            $type =offerType::all();
            $service_id = decrypt(request()->service_id);
            $heading = [
                1 => __('translation.rent_offer'),
                2 => __('translation.sale_order'),
                3 => __('translation.exchange Orders'),
            ];
            // dd($service_id);
            return view('offers.create' , compact('areas' , 'type', 'service_id' , 'heading'));
        }catch(Exception $e){
            abort(404);
        }
    }
    public function StoreOffer($request){
        $this->StoreOfferInDatabse($request);
        return redirect()->route('offers.index');
    }

    public function StoreOfferInDatabse($request){
        try{
            // Upload Main Image
            $request->main_image->store('offers' , 'public');
            $name = $request->main_image->hashName();
            // init Offer Data
            $data =  [
            'title' => $request->title,
            'price' => $request->price,
            'location' => $request->location,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
            'long' => $request->long,
            'lat' => $request->lat,
            'main_image' => $name,
            'type_id' => $request->type_idd,
            'area_id' => $request->type_idd,
            'service_id' => $request->service_id,
            ];
            // Sotre The Offer Data
            $offer = Offer::create($data);
            // Uploda Sub Image
            $this->HandelOfferFiles($request->sub_images, $offer);
            }catch(Exception $e){
            dd($e);
        }
    }

    public function getOfferIndex(){
        // dd('sad');
        // $areas = Area::get();
        try{
            $areas = Area::all();
            $type =offerType::all();
            $service_id = decrypt(request()->service_id);
            $heading = [
                1 => __('translation.rent_offer'),
                2 => __('translation.sale_order'),
                3 => __('translation.exchange Orders'),
            ];
            // dd($service_id);
            return view('offers.index' , compact('areas' , 'type', 'service_id' , 'heading'));
        }catch(Exception $e){
            abort(404);
        }
        // return view('offers.index', compact('areas'));
    }

    public function getAjaxData(){
        $query = Offer::BelongToService(request('service_id'));

        return  DataTables::of($query)
            ->addColumn('record_select', 'offers.data_table.record_select')
            ->editColumn('created_at', function ( $user) {
                return $user->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.admins.data_table.actions')
            // ->addColumn('roles' , function($admin){
            //     return view('offers.data_table.roles', compact('admin'));
            // })
            ->addColumn('status' , function($admin){
                return view('offers.data_table.status', compact('admin'));
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

    public function HandelOfferFiles($files , Offer $offer)
    {
        foreach ($files as $key => $value) {
            $name = $value->hashName();
            $value->store('offers/attachments', 'public');
            // I Do This For First Step
            $attachment  = new Attachments();
                // $attachment->attacheable = $agent->id;
                $attachment->url = $name;
                $offer->attachments()->save($attachment);
        }
    }
}
