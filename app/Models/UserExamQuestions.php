<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExamQuestions extends Model
{
	// Connection
	protected $connection = 'e_learning';

	// Table
	protected $table = 'user_exam_questions_tbl';

	// Fillable fields
	protected $fillable = ['question_id', 'question', 'user_exam_config_id'];

	//  Exam Config
	public function examConfig()
	{
		return $this->belongsTo('App\Models\UserExamConfig', 'id', 'user_exam_config_id');
	}

	// Exam Choices
	public function examChoices()
	{
		return $this->hasMany('App\Models\UserExamChoices', 'user_exam_question_id');
	}
}
