<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummaryReportController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store_patient_summary_details(Request $request)
	{
		$request->validate([
			'work_queue_id' => 'required',
			'provider_report' => 'required'
		]);
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store_provider_summary_details(Request $request)
	{
		$request->validate([
			'work_queue_id' => 'required',
			'patient_report' => 'required'
		]);
	}
}
