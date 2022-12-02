<?php

namespace App\Services;

use App\Models\AnswerType;
use App\Models\Condition;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\QuestionType;
use App\Models\Task;


class TaskService
{

    public function store($tasks, $investigationId)
    {
        foreach ($tasks as $item) {
            $task = Task::create([
                'investigation_id' => $investigationId,
                'answer_type_id' => $item['answerTypeId'],
                'question_type_id' => $item['questionTypeId'],
                'file' => $item['file'],
            ]);

            $question = Question::create([
                'task_id' => $task->id,
                'question' => $item['question']
            ]);

            $answerTypeKey = AnswerType::find($item['answerTypeId'])->key;
            $questionTypeKey = QuestionType::find($item['questionTypeId'])->key;

            if ($answerTypeKey === 'checkbox' || $answerTypeKey === 'radio') {
                foreach ($item['options'] as $option)
                    QuestionOption::create([
                        'question_id' => $question->id,
                        'option' => $option,
                    ]);
            }

            if ($questionTypeKey === 'condition') {
                foreach ($item['conditions'] as $condition)
                    Condition::create([
                        'question_id' => $question->id,
                        'product_id' => $condition['id'],
                        'quantity' => $condition['quantity'],
                        'is_box' => $condition['isBox'],
                    ]);
            }
        }
    }
}


