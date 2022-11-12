<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


abstract class OfferAbstract extends Model {
    use HasFactory, HasStatus;
    protected $guarded = [];
}
class Offer extends OfferAbstract
{
    // use HasFactory, HasStatus;

    protected $statusattrubute = 'is_avaliable';

    // relation With Attachment

    // Scope With Service Id
    public function scopeBelongToService($query, $service_id)
    {
        return $query->when($service_id, function ($query) use ($service_id) {
            return $query->where('service_id', $service_id);
        });
    }

    public function attachments()
    {
        return $this->morphMany(Attachments::class, 'attachable');
    }
}
