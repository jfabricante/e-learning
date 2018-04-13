<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
	// Connection
	protected $connection = 'e_learning';

	// Table
	protected $table =  'choices_tbl';

	// Fillable fields
	protected $fillable = ['choice', 'question_id'];

	// Question
	public function question()
	{
		return $this->belongsTo('App\Models\QuestionBank', 'question_id');
	}
}
