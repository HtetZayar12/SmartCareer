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
}
