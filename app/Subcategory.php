<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $fillable = ['name', 'category_id'];

  	public function category()
  	{
      return $this->belongsTo('App\Category');
  	}

  	public function freelancers()
  	{
      return $this->hasMany('App\Freelancer');
  	}

  	public function jobs()
  	{
      return $this->hasMany('App\Job');
  	}

}