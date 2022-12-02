<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'category_id',
        'name',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
