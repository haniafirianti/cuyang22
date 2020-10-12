<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    protected $table = 'details_products';
    protected $fillable = ['product_id','detail_product_description','detail_product_total_product','detail_product_image'];


    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
