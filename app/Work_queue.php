<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_queue extends Model
{
	/**
	 * Set fillable  all fields except Id
	 */
	protected $guarded = ['id'];
	
	public function clientDetail()
	{
		return $this->belongsTo('App\Client', 'client_id', 'id');
	}
	
	public function reviewerDetail()
	{
		return $this->belongsTo('App\User', 'reviewer_id', 'id');
	}
	
	public function messages()
	{
		return $this->hasMany(Message::class, 'workid', 'id');
	}
	
	public function summary_reports()
	{
		return $this->hasOne(Summary_report::class);
	}
}
