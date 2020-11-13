<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable= ['name', 'photo','description', 'user_id'];
}
