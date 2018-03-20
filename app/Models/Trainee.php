<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Primary key
	protected $primaryKey = 'trainee_code';

	// Table
	protected $table = 'trainees_masterfile';

	// Fillable fields
	protected $fillable = ['trainee_code','first_name', 'middle_name', 'last_name', 'nickname', 'dealer_id', 'street_address', 'telephone_no', 'email', 'job_position_id', 'employment_status_id', 'date_hired', 'date_of_birth', 'gender', 'picture', 'create_user', 'date_created', 'update_user', 'date_updated'];

	public $timestamps = false;

	// Relationship
	public function user()
	{
		return $this->hasOne('App\Models\User');
	}

	public function dealer()
	{
		return $this->belongsTo('App\Models\Dealer', 'dealer_id');
	}

	public function position()
	{
		return $this->belongsTo('App\Models\Position', 'job_position_id');
	}

	public function status()
	{
		return $this->belongsTo('App\Models\Status', 'employment_status_id');
	}

	// Name format
	public function getFullname()
	{
		return ucwords($this->first_name . ' ' . $this->last_name);
	}

}
