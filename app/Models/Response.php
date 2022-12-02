<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'salepoint_id',
        'task_id',
        'question_id',
        'response',
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y, H:i',
    ];

    public function salepoint()
    {
        return $this->belongsTo(Salepoint::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
