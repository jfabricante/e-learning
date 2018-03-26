<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'sub_category_tbl';

    // Fillable fields
    protected $fillable = ['name', 'category_id'];

    // Category
    public function category()
    {
    	return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
