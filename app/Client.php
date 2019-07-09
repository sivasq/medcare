<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\VerifyEmail;

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
	protected $hidden = ['password', 'api_token', 'email_otp'];

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

	public function sendEmailVerificationNotification()
	{
		$this->notify(new VerifyEmail); // my notification
	}

	/**
	 * Mark the given user's email as verified.
	 *
	 * @return bool
	 */
	public function markEmailAsVerified()
	{
		return $this->forceFill([
			'email_verified_at' => $this->freshTimestamp(),
			'email_otp' => null
		])->save();
	}

	public function markEmailAsUnVerified()
	{
		return $this->forceFill([
			'email_verified_at' => null,
			'email_otp' => mt_rand(1000,9999)
		])->save();
	}
}
