<?php

namespace App\Http\Controllers\API\Auth;

use App\Client;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Validator;

class RegisterController extends BaseController
{
	/**
	 * Register api
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\Response
	 */

	public function register(Request $request)
	{
		$autoLogin = false;
		$sendOtp = false;

		$validator = Validator::make($request->all(), [
			'first_name' => 'required',
			'last_name' => 'nullable',
			'gender' => 'nullable',
			'dob' => 'nullable',
			'email' => 'required|email|unique:clients',
			'password' => 'required'
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors());
		}

		$request->request->add(['name' => $request->input('first_name') . ' ' . $request->input('last_name')]);
		if ($sendOtp) {
			$request->request->add(['email_otp' => mt_rand(1000, 9999)]);
		}
		$request->merge(['password' => Hash::make($request->get('password'))]);
		$request->merge(array_map('trim', $request->all()));

		$user = Client::create($request->all());
		if ($sendOtp) {
			event(new Registered($user));
		}
		if ($user->exists) {
			if ($autoLogin) {
				$apiToken = uniqid(base64_encode(Str::random(60)));

				// Update Token
				$updateToken = Client::where('email', $request->email)->update(['api_token' => hash('sha256', $apiToken)]);

				if ($updateToken) {
					return $this->sendResponse(Arr::add(Arr::except($user, 'api_token'), 'access_token', $apiToken), 'User register successfully and Login Success.');
				} else {
					return $this->sendError('Server Error');
				}
			}
			return $this->sendResponse([], 'User register successfully.');
		} else {
			return $this->sendError([], 'User registration Error.');
		}
	}
}