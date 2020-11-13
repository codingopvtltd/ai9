<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table        = 'category';
    protected $primaryKey   = 'id';

    protected $fillable = [ 'category_name', 'category_image','category_slug','status'];
}
