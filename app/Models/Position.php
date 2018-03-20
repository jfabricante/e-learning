<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Primary key
	protected $primaryKey = 'job_id';

	// Table
	protected $table = 'job_position';

	public function trainees()
	{
		return $this->hasMany('App\Models\Trainee', 'job_position_id', 'job_id');
	}

}
