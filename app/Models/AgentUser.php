<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentUser extends Model
{
    use HasFactory;
    public  $guarded = [];

    public function attachments(){
        return $this->morphMany(Attachments::class, 'attachable');
    }
}
