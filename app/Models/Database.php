<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i',
    ];
    protected $fillable = [
        'name',
        'path',
        'is_active',
    ];

    public function salepoints()
    {
        return $this->hasMany(Salepoint::class);
    }
}
