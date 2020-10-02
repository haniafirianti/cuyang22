<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CategoryProduct extends Model
{
	use SoftDeletes;

    protected $table = 'category_products';
    protected $fillable = ['category_name'];
    protected $dates = ['deleted_at'];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
