<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /** @use HasFactory<\Database\Factories\DeveloperFactory> */

    protected $fillable = ['name', 'email', 'role', 'experience', 'description'];

    use HasFactory;
}
