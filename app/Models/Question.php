<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $casts = [
        'question' => 'array'
    ];
    protected $fillable = [
        'task_id',
        'question',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function conditions()
    {
        return $this->hasMany(Condition::class);
    }
}
