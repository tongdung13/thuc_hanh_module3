<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_code',
        'agent_name',
        'phone',
        'email',
        'address',
        'name_manage',
        'status'
    ];
}
