<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingHistory extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Table
	protected $table = 'training_history_tbl';

	// Fillable fields
	protected $fillable = ['training_title', 'training_trainer', 'training_venue', 'training_date', 'trainee_id'];

	public $timestamps = false;    
}
