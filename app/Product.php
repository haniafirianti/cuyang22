<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
	use SoftDeletes;
	protected $fillable = ['product_name','product_category_name','product_status','created_by','deleted_by'];
    protected $dates = ['deleted_at'];

    public function categories()
    {
        return $this->belongsTo(CategoryProduct::class);
    }
}