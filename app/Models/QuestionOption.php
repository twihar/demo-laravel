<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    use HasFactory;

    protected $casts = [
        'option' => 'array'
    ];
    protected $fillable = [
        'question_id',
        'option',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
