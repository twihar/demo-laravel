<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:M. d y, H:i',
        'start_date' => 'datetime:Y-m-d',
        'end_date' => 'datetime:Y-m-d',
        'name' => 'array',
        'description' => 'array',
        'lang' => 'array'
    ];
    protected $fillable = [
        'campaign_id',
        'name',
        'description',
        'image',
        'amount',
        'start_date',
        'end_date',
        'is_model',
        'is_active'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function salepoints()
    {
        return $this->belongsToMany(Salepoint::class, 'investigation_salepoints', 'investigation_id', 'salepoint_id');
    }

}
