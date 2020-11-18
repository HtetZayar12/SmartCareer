<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['photo','description','address','coin','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

