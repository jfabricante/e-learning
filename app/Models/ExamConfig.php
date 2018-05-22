<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamConfig extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'exam_config_tbl';

    // Fillable fields
    protected $fillable = ['category_id','description', 'total_items', 'time_limit', 'date_start', 'date_end', 'created_by', 'updated_by'];

    // Config category
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    // Items per sub category
    public function subCategoryItems()
    {
    	return $this->hasMany('App\Models\subCategoryItems', 'exam_config_id');
    }

    // Exam Config
    public function userExamConfig()
    {
        return $this->hasMany('App\Models\UserExamConfig', 'config_id');
    }
}
