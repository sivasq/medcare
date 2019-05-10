<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_queue extends Model
{
	public function clientDetail()
	{
		return $this->belongsTo('App\Client','client_id', 'id');
	}

	public function reviewerDetail()
	{
		return $this->belongsTo('App\User','reviewer_id', 'id');
	}
}
