<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

	public function getAgeAttribute()
	{
		return Carbon::parse($this->attributes['dob'])->age;
	}
}
