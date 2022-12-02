<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestigationSalepoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',//User who validate or refuse
        'investigation_id',
        'salepoint_id',
        'syncronized_at',
        'raison_id',
        'remark',
        'status',
    ];
    protected $casts = [
        'syncronized_at' => 'datetime:M. d y, H:i',
    ];

    public function investigation()
    {
        return $this->belongsTo(Investigation::class);
    }

    public function salepoint()
    {
        return $this->belongsTo(Salepoint::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
