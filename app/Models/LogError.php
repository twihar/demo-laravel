<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogError extends Model
{
    use HasFactory;

    protected $casts = [
        'request' => 'array'
    ];
    protected $fillable = [
        'source',
        'message',
        'line',
        'file',
        'request',
    ];
}
