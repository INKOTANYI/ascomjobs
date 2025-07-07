<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'code', 'description'];

    // Relationship to be added later with User/Applicant model
    // public function applicants()
    // {
    //     return $this->hasMany(User::class); // Assuming User model for applicants
    // }
}
