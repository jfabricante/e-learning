<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExamConfig extends Model
{
	// Connection
	protected $connection = 'e_learning';

	// Table
	protected $table = 'user_exam_config_tbl';

	// Fillable fields
	protected $fillable = ['user_id', 'config_id', 'remaining_time'];

	// Exam questions
	public function examQuestions()
	{
		return $this->hasMany('App\Models\UserExamQuestions', 'user_exam_config_id');
	}

	// Exam config
	public function examConfig()
	{
		return $this->belongsTo('App\Models\ExamConfig', 'config_id');
	}
}
