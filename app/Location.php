<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =['name'];
    
    public function job()
	{
	  return $this->belongsTo('App\Job');
	}

}
