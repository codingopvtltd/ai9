<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table        = 'product';
    protected $primaryKey   = 'id';

    protected $fillable = [ 'product_name','category_id_fk','sub_category_fk','product_images','product_description','product_sku','product_price','product_discount_price','product_name_slug','status'];
}
