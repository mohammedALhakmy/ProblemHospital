<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RayEmployee extends Authenticatable
{
    use HasFactory;

    protected $fillable = ["name", "email", "email_verified_at", "password", "remember_token"];
}
