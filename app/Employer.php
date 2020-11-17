<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['photo','description','address','coin','subcategory_id','user_id'];
}

