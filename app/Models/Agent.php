<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use HasFactory , HasStatus, SoftDeletes;
    public $guarded = [];
    // relations
    public function attachments(){
        return $this->morphMany(Attachments::class, 'attachable');
    }
    public function Users(){
        return $this->hasMany(AgentUser::class);
    }

    // Accessor
    public function getLogoAttribute($key)
    {
        return asset('agents/' . $key);
    }
}
