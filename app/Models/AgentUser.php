<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AgentUser extends Authenticatable
{
    use HasFactory , HasStatus;
    public  $guarded = [];

    public function attachments(){
        return $this->morphMany(Attachments::class, 'attachable');
    }
}
