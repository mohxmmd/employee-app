<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'role', 'joining_date', 'is_active'];

    protected $casts = [
        'joining_date' => 'date',
        'is_active' => 'boolean',
    ];
}
