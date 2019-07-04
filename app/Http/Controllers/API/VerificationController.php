<?php
/**
 * Created by PhpStorm.
 * User: Sivaraj
 * Date: 23-04-2019 023
 * Time: 13:14
 */

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class VerificationController extends BaseController
{
	use VerifiesEmails;
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:api')->except(['verify', 'resend']);
		$this->middleware('signed')->only('verify');
		$this->middleware('throttle:6,1')->only('verify', 'resend');
	}
	
	/**
	 * Show the email verification notice.
	 *
	 */
	public function show()
	{
		//
	}
	
	/**
	 * Mark the authenticated user's email address as verified.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function verify(Request $request)
	{
		$user = Client::findOrFail($request->route('id'));
		
		if ($user->exists) {
			if ($user->hasVerifiedEmail()) {
//				return response()->json(['message' => 'Email Already verified!']);
				return redirect('mailverifysuccess')->with('status', 'Profile updated!');
			}
			
			if ($user->markEmailAsVerified()) {
//				return response()->json(['message' => 'Email verified!']);
				return redirect('mailverifysuccess')->with('status', 'Profile notupdated!');
			}
			
		} else {
			return response()->json('Email not verified!');
		}
	}
	
	/**
	 * Resend the email verification notification.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function resend(Request $request)
	{
//		return response()->json('Email verified!',200);
		
		if ($request->user()->hasVerifiedEmail()) {
			return response()->json('User already have verified email!', 422);
//            return redirect($this->redirectPath());
		}
		
		$request->user()->sendEmailVerificationNotification();
		
		return response()->json('The notification has been resubmitted');
//       return back()->with('resent', true);
	}
}