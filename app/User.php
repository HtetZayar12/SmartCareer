<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function freelancer()
    {
      return $this->belongsTo('App\Freelancer');
    }

    public function jobs()
    {
        return $this->belongsToMany('App\Job')
                    ->withPivot('bid')
                    ->withPivot('myduration')
                    ->withPivot('cover_letter')
                    ->withTimestamps();
    }   


    public function employer()
    {
      return $this->belongsTo('App\Employer');
    }
}
