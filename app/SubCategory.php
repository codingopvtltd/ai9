<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table        = 'sub_category';
    protected $primaryKey   = 'id';

    protected $fillable = [ 'sub_category_name','category_id_fk','sub_category_image','sub_category_slug','status'];
}
