<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable = ['photo','description','address','subcategory_id','user_id'];

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
