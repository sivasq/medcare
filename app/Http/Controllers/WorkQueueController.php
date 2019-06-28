<?php

namespace App\Http\Controllers;

use App\Summary_report;
use App\User;
use App\Work_queue;
use Illuminate\Http\Request;

class WorkQueueController extends Controller
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
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$works = Work_queue::all();
		$reviewers = User::where('user_role', 2)->get();
//	    dd($reviewers);
		return view('works.listall', compact('works', 'reviewers'));
		
		
		//===================Create client================//
//		$client = new Client(['header' => ['Accept' => 'application/fhir+json']]);
//		$request = new GuzRequest('GET', 'https://stu3.test.pyrohealth.net/fhir/Patient/92a6fbf1-f0d3-4f76-8f98-38d6cc54d4ac');
//		$response = $client->send($request, ['timeout' => 2]);
//		$body = $response->getBody();
//		$response_body = json_decode($body);
//		// Dump on browser
//		print_r($response_body);
	
	}
	
	public function workprogress($workid)
	{
		$work_details = Work_queue::find($workid);
//		dd($work_details->summary_reports->toArray());
		
		return view('workprogress.work-progress', compact('work_details', 'workid'));
		
//		$summaryReports = Summary_report::where('work_queue_id', $workid)->first();
//		return view('workprogress.work-progress', compact('summaryReports', 'workid'));
//		dd($summaryReports->toArray);
	}
	
	public function assignworktouser($workid, $userid)
	{
		Work_queue::find($workid)->update(['status' => 'assigned', 'reviewer_id' => $userid]);
		
		User::where('id', $userid)->where('work_live_status', '!=', 'assigned')->update(['work_live_status' => 'assigned']);
		
		return redirect()->back()->with('success', 'Work Successfully Assigned!');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param \App\work_queue $work_queue
	 * @return \Illuminate\Http\Response
	 */
	public function show(work_queue $work_queue)
	{
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\work_queue $work_queue
	 * @return \Illuminate\Http\Response
	 */
	public function edit(work_queue $work_queue)
	{
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\work_queue $work_queue
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, work_queue $work_queue)
	{
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\work_queue $work_queue
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(work_queue $work_queue)
	{
		//
	}
	
	public function get_works($workid)
	{
		return Work_queue::where('workid', $workid)->get();;
	}
}
