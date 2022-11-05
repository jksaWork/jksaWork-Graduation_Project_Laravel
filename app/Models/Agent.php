<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory , HasStatus;
    public $guarded = [];
    public function attachments(){
        return $this->morphMany(Attachments::class, 'attachable');
    }
}
