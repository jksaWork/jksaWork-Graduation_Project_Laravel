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
        try{
            $areas = Area::all();
            $type =offerType::all();
            $service_id = request()->service_id;
            $heading = [
                1 => __('translation.rent_offer'),
                2 => __('translation.sale_order'),
                3 => __('translation.exchange Orders'),
            ];
            // dd($service_id);
            return view('offers.create' , compact('areas' , 'type', 'service_id' , 'heading'));
        }catch(Exception $e){
            dd($e);
        }
    }
    public function StoreOffer($request){
        $this->StoreOfferInDatabse($request);
        return redirect()->route('offers.index' , ['service_id' => ($request->service_id)]);
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
            'area_id' => $request->area_idd,
            'service_id' => $request->service_id,
            'agent_id' => $request->agent_id,
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
            $service_id = request()->service_id;
            $heading = [
                1 => __('translation.rent_offer'),
                2 => __('translation.sale_order'),
                3 => __('translation.exchange Orders'),
            ];
            // dd($service_id);
            return view('offers.index' , compact('areas' , 'type', 'service_id' , 'heading'));
        }catch(Exception $e){
            abort(500);
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

            ->addColumn('actions', 'offers.data_table.actions')
            ->addColumn('area' , function($offer){
                $type ='area';
                return view('offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('agent' , function($offer){
                $type ='agent';
                return view('offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('owner' , function($offer){
                $type ='owner';
                return view('offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('client' , function($offer){
                $type ='client';
                return view('offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('service' , function($offer){
                $type ='service';
                return view('offers.data_table.areas_services_type', compact('offer' , 'type'));
            })
            ->addColumn('type' , function($offer){
                $type = 'type';
                return view('offers.data_table.areas_services_type', compact('offer' , 'type'));
            })
            ->addColumn('status' , function($admin){
                return view('offers.data_table.status', compact('admin'));
            })
            ->rawColumns(['record_select', 'actions' , 'roles' , 'service' , 'type', 'area'])
            ->toJson();

    }


    public function ChangeStatus($Owner){
        // Change The Status
        $Owner->ChangeStatus();
        session()->flash('success' , 'Status  Was Change Succesfuly');
        return redirect()->back();
    }

    public function ShowOfferDetails($offer){
        $clients = Client::get();
        return view('offers.show', compact('offer',"clients"));
    }

    public function editOffer($offer){
        // $roles = Role::all();
        $areas = Area::all();
        $type =offerType::all();
        $service_id = request()->service_id;
        $heading = [
            1 => __('translation.rent_offer'),
            2 => __('translation.sale_order'),
            3 => __('translation.exchange Orders'),
        ];
        return view('offers.edit' ,  compact('areas' , 'type', 'service_id' , 'heading', 'offer' ));
    }

    public function updateOffer($request, $offer)
    {
        // dd($request , $client);
        try{

            $data =  [
                'title' => $request->title,
                'price' => $request->price,
                'location' => $request->location,
                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'long' => $request->long,
                'lat' => $request->lat,
                'type_id' => $request->type_idd,
                'area_id' => $request->area_idd,
                'service_id' => $request->service_id,
                'agent_id' => $request->agent_id,
                ];
                // dd($request->service_id);
                // Sotre The Offer Data
                $offer->update($data);
                return redirect()->route('offers.index' , ['service_id' => $request->service_id]);
        }catch(Exception $e){
            dd($e);
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }

    public function deleteOffer($Owner)
    {
        try{
            $Owner->delete();
            session()->flash('success' , 'Offer  Was Delete Succesfuly');
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

    public function ChangeOfferStatus($offer , $offervalue){
        $offer->status = $offervalue;
        $offer->save();
        return redirect()->back();
    }
}
