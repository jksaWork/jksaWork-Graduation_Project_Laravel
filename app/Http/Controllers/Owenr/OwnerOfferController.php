<?php

namespace App\Http\Controllers\Owenr;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Area;
use App\Models\Attachments;
use App\Models\Client;
use App\Models\Offer;
use App\Models\offerType;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OwnerOfferController extends Controller
{

    public function index(){
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
                return view('owner.offers.index' , compact('areas' , 'type', 'service_id' , 'heading'));
            }catch(Exception $e){
                abort(500);
            }
        return view('owner.offers.create');
    }
    public function create(){
        // Mohammed Altigain osammn

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
            return view('owner.offers.create' , compact('areas' , 'type', 'service_id' , 'heading'));
        }catch(Exception $e){
            dd($e);
        }

        // return view()
    }
    public function store(StoreOfferRequest $request){
        try{
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
            'agent_id' => $request->agent_id,
            'owner_id' => auth()->user()->id,
            ];
            // Sotre The Offer Data
            $offer = Offer::create($data);
            // Uploda Sub Image
            $this->HandelOfferFiles($request->sub_images, $offer);
            return redirect()->route('owner.offers.index' , ['service_id'=> $request->service_id]);
            }catch(Exception $e){
            dd($e);
        }


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

     public function getAjaxData(){
        $query = Offer::where('owner_id', auth()->user()->id)->BelongToService(request('service_id'));
        return  DataTables::of($query)
            ->addColumn('record_select', 'offers.data_table.record_select')
            ->editColumn('created_at', function ( $user) {
                return $user->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'owner.offers.data_table.actions')
            ->addColumn('area' , function($offer){
                $type ='area';
                return view('owner.offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('agent' , function($offer){
                $type ='agent';
                return view('owner.offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('owner' , function($offer){
                $type ='owner';
                return view('owner.offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('client' , function($offer){
                $type ='client';
                return view('owner.offers.data_table.areas_services_type', compact('offer', 'type'));
            })
            ->addColumn('service' , function($offer){
                $type ='service';
                return view('owner.offers.data_table.areas_services_type', compact('offer' , 'type'));
            })
            ->addColumn('type' , function($offer){
                $type = 'type';
                return view('owner.offers.data_table.areas_services_type', compact('offer' , 'type'));
            })
            ->addColumn('status' , function($admin){
                return view('owner.offers.data_table.status', compact('admin'));
            })
            ->rawColumns(['record_select', 'actions' , 'roles' , 'service' , 'type', 'area'])
            ->toJson();

    }

    public function show($id){
        // dd($id);
        $offer = Offer::find($id);
        $clients = Client::get();
        return view('owner.offers.show' , compact('offer' , 'clients'));
    }

    public function edit($id){
        $offer = Offer::find($id);
        $areas = Area::all();
        $type =offerType::all();
        $service_id = request()->service_id;
        $heading = [
            1 => __('translation.rent_offer'),
            2 => __('translation.sale_order'),
            3 => __('translation.exchange Orders'),
        ];
        return view('owner.offers.edit' ,  compact('areas' , 'type', 'service_id' , 'heading', 'offer' ));
    }

    public function update(UpdateOfferRequest $request, $offer_id)
    {
        try{
            $offer = Offer::find($offer_id);
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
                // Sotre The Offer Data
                $offer->update($data);
                return redirect()->route('owner.offers.index' , ['service_id' => $request->service_id]);
        }catch(Exception $e){
            dd($e);
            session()->flash('error' ,  'Some Thing Went Worng ');
            return redirect()->back();
        }
    }
}
