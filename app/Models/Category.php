<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Connection
    protected $connection = 'e_learning';

    // Table
    protected $table = 'category_tbl';

    // Fillable fields
    protected $fillable = ['name'];

    public function subCategories()
    {
    	return $this->hasMany('App\Models\SubCategory', 'category_id');
    }
}
