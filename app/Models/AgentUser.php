<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class AgentUser extends Authenticatable
{
    use HasFactory , HasStatus, SoftDeletes , LaratrustUserTrait;
    public  $guarded = [];

    public function attachments(){
        return $this->morphMany(Attachments::class, 'attachable');
    }
}
