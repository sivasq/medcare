<?php
/**
 * Created by PhpStorm.
 * User: Sivaraj
 * Date: 23-04-2019 023
 * Time: 13:14
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

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
		$this->middleware('auth');
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
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function verify(Request $request)
	{
		// ->route('id') gets route user id and getKey() gets current user id()
		// do not forget that you must send Authorization header to get the user from the request
		if ($request->route('id') == $request->user()->getKey() &&
			$request->user()->markEmailAsVerified()) {
			event(new Verified($request->user()));
		}

		return response()->json('Email verified!');
//        return redirect($this->redirectPath());
	}

	/**
	 * Resend the email verification notification.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function resend(Request $request)
	{
		return response()->json('Email verified!',200);

//		if ($request->user()->hasVerifiedEmail()) {
//			return response()->json('User already have verified email!', 422);
////            return redirect($this->redirectPath());
//		}
//
//		$request->user()->sendEmailVerificationNotification();
//
//		return response()->json('The notification has been resubmitted');
////       return back()->with('resent', true);
	}
}