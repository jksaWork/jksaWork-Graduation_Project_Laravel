<?php

namespace App\Models;

use App\Traits\HasSearchScope;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Owner extends Authenticatable
{
    use HasFactory , HasApiTokens , HasSearchScope , HasStatus;
    protected $guarded =[];

    // relation Owners With His Agent If Has Agent
    public function Agent(){
        return $this->belongsTo(Agent::class);
    }


    // Scopes When Agent User Is Usgin
    public function scopeWhenAgentUser($q){
        if(auth()->guard('web')->check()){
            return $q->where('agent_id' , auth()->user()->agent_id);
        }else{
            return $q;
        }
    }
}
