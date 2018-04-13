<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleStatus extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'module_status_tbl';

    // Fillable fields
    protected $fillable = ['module_id', 'user_id', 'status'];

    // Module
    public function module()
    {
    	return $this->belongsTo('App\Models\Module', 'id', 'module_id');
    }
}
