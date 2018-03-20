<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Table
	protected $table = 'employment_history_tbl';

	// Fillable fields
	protected $fillable = ['prev_company', 'prev_address', 'prev_position', 'prev_inc_date', 'trainee_id'];

	public $timestamps = false;
}
