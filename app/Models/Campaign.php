<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:M. d y, H:i',
        'name' => 'array',
        'description' => 'array',
        'lang' => 'array'
    ];

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'image',
        'is_active',
        'lang',
    ];

    public function investigations()
    {
        return $this->hasMany(Investigation::class);
    }
}
