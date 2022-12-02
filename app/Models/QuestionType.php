<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'name' => 'array',
        'description' => 'array'
    ];
    protected $fillable = [
        'key',
        'name',
        'description',
        'icon',
    ];
}
