<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'salepoint_id',
        'device_key',
        'serial',
        'imei',
    ];

    public function salepoint()
    {
        return $this->belongsTo(Salepoint::class);
    }
}
