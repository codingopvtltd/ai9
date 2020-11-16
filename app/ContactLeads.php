<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactLeads extends Model
{
    protected $table        = 'contact_leads';
    protected $primaryKey   = 'id';

    protected $fillable = [ 'first_name', 'last_name','email','company','city','country','phone_number','project_details','status'];
}
