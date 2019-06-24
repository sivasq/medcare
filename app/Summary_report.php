<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary_report extends Model
{
	protected $guarded = ['id'];
	
	public function getProviderReportAttribute($provider_report) {
		return html_entity_decode($provider_report);
	}
	
	public function getPatientReportAttribute($patient_report) {
		return html_entity_decode($patient_report);
	}
}
