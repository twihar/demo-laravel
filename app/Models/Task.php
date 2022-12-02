<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'investigation_id',
        'answer_type_id',
        'question_type_id',
        'file',
    ];

    public function investigation()
    {
        return $this->belongsTo(Investigation::class);
    }

    public function answerType()
    {
        return $this->belongsTo(AnswerType::class);
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
