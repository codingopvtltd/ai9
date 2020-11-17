<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactLeads extends Model
{
    protected $table        = 'leads';
    protected $primaryKey   = 'id';

    protected $fillable = [ 'first_name','email','status'];
}
