<?php
/**
 * Created by PhpStorm.
 * User: Sivaraj
 * Date: 23-04-2019 023
 * Time: 13:14
 */

namespace App\Http\Controllers\API\Auth;

use App\Client;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\type;

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
		$this->middleware('auth:api');
		//		$this->middleware('auth:api')->except(['verify', 'resend']);
		//		$this->middleware('signed')->only('verify');
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
		$user = Auth::user();

		if ($user->exists) {
			if ($user->hasVerifiedEmail()) {
				return $this->sendResponse([], 'Email Already verified!');
			}
			if ($request->get('otp') === $user->email_otp) {
				if ($user->markEmailAsVerified()) {
					return $this->sendResponse([], 'Email verified!');
				}
			} else {
				return $this->sendError([], 'Invalid OTP!');
			}
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
		if ($request->user()->hasVerifiedEmail()) {
			return $this->sendResponse([], 'Email Already verified!');
		}

		if ($request->user()->markEmailAsUnVerified()) {
			$request->user()->sendEmailVerificationNotification();
			return $this->sendResponse([], 'The OTP sent to your Registered Email!');
		}
	}
}