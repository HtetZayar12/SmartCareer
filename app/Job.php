<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =['name','skill_one','skill_two','skill_three','duration','closedate','description','location_id','user_id','subcategory_id','salary_id','status'];

    public function subcategory()
	{
	  return $this->belongsTo('App\Subcategory');
	}

	public function users()
    {
        return $this->belongsToMany('App\User')
                    ->withPivot('bid')
                    ->withPivot('myduration')
                    ->withPivot('cover_letter')
                    ->withPivot('confirm_status')
                    ->withTimestamps();
    }

	public function employer(){
	  return $this->belongsTo('App\User','user_id');
	} 

	public function salary()
	{
	  return $this->belongsTo('App\Salary');
	}

	public function location()
	{
	  return $this->belongsTo('App\Location');
	}

}
