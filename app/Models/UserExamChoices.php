<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExamChoices extends Model
{
	// Connection
	protected $connection = 'e_learning';

	// Table
	protected $table = 'user_exam_choices_tbl';

	// Fillable fields
	protected $fillable = ['choice', 'user_exam_question_id'];

	// Choice question
	public function examQuestion()
	{
		return $this->belongsTo('App\Models\UserExamQuestions', 'id', 'user_exam_question_id');
	}
}
