<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoryItems extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'sub_category_items_tbl';

    // Fillable fields
    protected $fillable = ['sub_category_id', 'items', 'exam_config_id'];

    // Exam config
    public function examConfig()
    {
    	return $this->belongsTo('App\Models\ExamConfig');
    }
}
