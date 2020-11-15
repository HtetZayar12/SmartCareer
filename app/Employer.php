<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['photo','description','address','subcategory_id','user_id'];
}
}
