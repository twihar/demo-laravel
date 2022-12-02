<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raison extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'array',
        'description' => 'array'
    ];
    protected $fillable = [
        'name',
        'description'
    ];
}
