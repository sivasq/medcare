<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable implements MustVerifyEmail
{
	
	use Notifiable;
	
	// The authentication guard for client
	protected $guard = 'api';
	
	/**
	 * Set fillable  all fields except Id
	 */
	protected $guarded = ['id'];
	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = ['password'];
	
	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = ['email_verified_at' => 'datetime',];
	
	/**
	 * A user can have many messages
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function messages()
	{
		return $this->hasMany(Message::class);
	}
	
	public function getAgeAttribute()
	{
		return Carbon::parse($this->attributes['dob'])->age;
	}
}
