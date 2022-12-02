<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'product_id',
        'quantity',
        'is_box'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
