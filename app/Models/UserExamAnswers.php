<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExamAnswers extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'user_exam_answers_tbl';

    // Fillable fields
    protected $fillable = ['user_exam_question_id', 'user_exam_answer', 'is_correct'];

    // UserExamQuestions
    public function examQuestion()
    {
    	return $this->belongsTo('App\Models\UserExamQuestions', 'user_exam_question_id');
    }
}
