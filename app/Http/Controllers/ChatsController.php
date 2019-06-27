<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Log;

class ChatsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Show chats
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($workid)
	{
//		$workid = $work_id;
		return view('chats/chat', compact('workid'));
	}
	
	/**
	 * Fetch all messages
	 *
	 * @return Message
	 */
	public function fetchMessages($workid)
	{
		return Message::with('user')->where('workid', $workid)->get();
	}
	
	/**
	 * Persist message to database
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function sendMessage(Request $request)
	{
		$user = Auth::user();
		
//		$out = new \Symfony\Component\Console\Output\ConsoleOutput();
//		$out->writeln(print_r($request->all(), true));
//		Log::info($request->input('workid'));
		
		$message = $user->messages()->create([
			'message' => $request->input('message'),
			'workid' => $request->input('workid')
		]);
		$work = $request->input('workid');
		broadcast(new MessageSent($work, $user, $message));
		return ['status' => 'Message Sent!'];
	}
}
