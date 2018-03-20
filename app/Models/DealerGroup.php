<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DealerGroup extends Model
{
	// Connection
	protected $connection = 'sys_training';

	// Table
	protected $table = 'dealer_group';

	public function dealers()
	{
		return $this->hasMany('App\Models\Dealer', 'dealer_group_id', 'dealer_group_id');
	}
}
