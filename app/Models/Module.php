<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'module_tbl';

    // Fillable fields
    protected $fillable = ['name', 'subcategory_id', 'course_period', 'plan_start', 'completion_date', 'filename', 'mime_type', 'file_size', 'uploaded_by'];

    // Sub category
    public function subcategory()
    {
    	return $this->belongsTo('App\Models\SubCategory', 'subcategory_id');
    }

    // Module status
    public function states()
    {
        return $this->hasMany('App\Models\ModuleStatus', 'module_id');
    }

}
