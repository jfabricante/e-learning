<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // Connection
    protected $connection = 'sys_training';

    // Table
    protected $table = 'employment_status';

    // Timestamps
    public $timestamps = false;


    public function trainees()
    {
    	return $this->hasMany('App\Models\Trainee', 'employment_status_id');
    }
}
