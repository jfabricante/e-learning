<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Table
	protected $table = 'education_history_tbl';

	// Fillable fields
	protected $fillable = ['id', 'level', 'institution', 'degree', 'trainee_id'];

	public $timestamps = false;

}