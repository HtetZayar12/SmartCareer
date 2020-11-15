<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =['name','skill','duration','closedate','description','location_id','user_id','salary_id','subcategory_id'];
}
