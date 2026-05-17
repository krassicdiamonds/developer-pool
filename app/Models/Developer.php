<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /** @use HasFactory<\Database\Factories\DeveloperFactory> */

    protected $fillable = ['name', 'email', 'role', 'experience', 'description', 'company_id'];

    use HasFactory;

    public function company(){
        // Belongs to the company model because it uses its primary key as/for it's foreign id.
        return $this->belongsTo(Company::class);

        // This allows us to do something like this:
        // $developer->company->name
    }
}
