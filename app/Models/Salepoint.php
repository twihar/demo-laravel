<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Salepoint extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'code',
        'name',
        'image',
        'address',
        'phone',
        'database_id',
        'opus_account',
        'gifty_account_id',
        'points',
        'password',
        'city_id',
        'region_id',
        'latitude',
        'longitude',
        'salepoint_type_id',
        'salepoint_area_id',
        'salepoint_zone_id',
        'salepoint_circuit_id',
        'salepoint_cluster_id',
        'salepoint_supply_type_id',
        'salepoint_route_id'
    ];
    protected $hidden = [
        'password'
    ];

    public function database()
    {
        return $this->belongsTo(Database::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class)->withDefault(null);
    }

    public function region()
    {
        return $this->belongsTo(Region::class)->withDefault(null);
    }

    public function salepointType()
    {
        return $this->belongsTo(SalepointType::class)->withDefault(null);
    }

    public function salepointArea()
    {
        return $this->belongsTo(SalepointArea::class)->withDefault(null);
    }

    public function salepointZone()
    {
        return $this->belongsTo(SalepointZone::class)->withDefault(null);
    }

    public function salepointCircuit()
    {
        return $this->belongsTo(SalepointCircuit::class)->withDefault(null);
    }

    public function salepointCluster()
    {
        return $this->belongsTo(SalepointCluster::class)->withDefault(null);
    }

    public function salepointSupplyType()
    {
        return $this->belongsTo(SalepointSupplyType::class)->withDefault(null);
    }

    public function salepointRoute()
    {
        return $this->belongsTo(SalepointRoute::class)->withDefault(null);
    }
}
