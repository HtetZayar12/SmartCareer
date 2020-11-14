<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable= ['photo','description','address','user_id'];
}
