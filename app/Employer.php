<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable= ['name', 'photo','description', 'user_id'];
}
