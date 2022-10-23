<?php

namespace App\Models;

use App\Traits\HasSearchScope;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
    use HasFactory , HasApiTokens, HasStatus, HasSearchScope;
    protected $guarded = [];
}
