<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Table
	protected $table = 'dealers_master';

	public function dealerGroup()
	{
		return $this->belongsTo('App\Models\DealerGroup', 'dealer_group_id');
	}

	public function trainees()
	{
		return $this->hasMany('App\Models\Trainee', 'dealer_id');
	}
}
