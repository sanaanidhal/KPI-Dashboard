<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'priority', 'date', 'duration'
    ];

    // Define casts for attributes
    protected $casts = [
        'date' => 'date', // This will cast the 'date' field to a DateTime object
    ];
}