<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class OfferAbstract extends Model {
    use HasFactory, HasStatus , SoftDeletes;
    protected $guarded = [];
}
class Offer extends OfferAbstract
{
    public $statusBadge = [
        'new' => 'badge badge-light-success',
        'rejected' => 'badge badge-light-danger',
        'under_mainten' => 'badge badge-light-info',
        'approved' =>  'badge badge-light-primary',
        'completed' => 'badge badge-light-success'
    ];

    public function getMainImageAttribute($key)
    {
        return asset('offers/' . $key);
    }
    // use HasFactory, HasStatus;
    protected $statusattrubute = 'is_avaliable';
    protected $status_filed = 'fillable';

    // relation With Attachment

    // Scope With Service Id
    public function scopeBelongToService($query, $service_id)
    {
        return $query->when($service_id, function ($query) use ($service_id) {
            return $query->where('service_id', $service_id);
        });
    }

    public function  scopewhenSearchByLocation($query , $searchValue){
        return $query->when($searchValue, function ($query) use ($searchValue) {
            return $query->where('location', 'like' , "%" . $searchValue)
            ->orWhere('title', 'like' , "%" . $searchValue)
            ->orWhere('short_desc', 'like' , "%" . $searchValue)
            ->orWhere('long_desc', 'like' , "%" . $searchValue);
        });
    }


    public function FavorateOffers(){
        return $this->belongsToMany(Client::class,  'favoarate_offers' , 'offer_id' , 'client_id');
    }

    public function scopeWhenSearchByArea($query, $area_id)
    {
        return $query->when($area_id, function ($query) use ($area_id) {
            return $query->where('area_id', $area_id);
        });
    }
    // Area  Relation
    public function Area(){
        return $this->belongsTo(Area::class);
    }


    // Service  Relation
    public function Service(){
        return $this->belongsTo(Service::class);
    }
    // Type Relation
    public function Type(){
        return $this->belongsTo(offerType::class);
    }

    public function Agent(){
        return $this->belongsTo(Agent::class);
    }
    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }

    public function attachments()
    {
        return $this->morphMany(Attachments::class, 'attachable');
    }

    // public function FavorateOffers(){
    //     return $this->hasMany(FavoarateOffer::class, 'offer_id');
    // }

    public function GetOfferStatusWithSpan(){
        return "<span class='badge". ($this->statusBadge[$this->status] ?? "badge-light-warning") ." '>" . __('translation.' . $this->status) . "</span>";
    }
}
