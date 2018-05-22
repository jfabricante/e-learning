<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
	// Connection
	protected $connection = 'e_learning';

	// Table
	protected $table = 'question_bank_tbl';

	// Fillable fields
	protected $fillable = ['question', 'answer', 'sub_category_id', 'created_by'];

	// Choices
	public function choices()
	{
		return $this->hasMany('App\Models\Choice', 'question_id');
	}

	// Sub Category
	public function subCategory()
	{
		return $this->belongsTo('App\Models\SubCategory');
	}

	// UserExamQuestion
	public function userExamQuestions()
	{
		return $this->hasMany('App\Models\UserExamQuestions');
	}
}
 