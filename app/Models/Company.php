<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    protected $fillable = ['name', 'location', 'email'];

    use HasFactory;

    public function developers(){
        // The company instance has many developer records associated with it.
        return $this->hasMany(Developer::class);

        // This allows us to do something like this:
        // $company->developer->name
    }
}
