<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =['name','skill_one','skill_two','skill_three','duration','closedate','description','location_id','user_id','subcategory_id','salary_id'];

    public function subcategory()
	{
	  return $this->belongsTo('App\Subcategory');
	}

	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
