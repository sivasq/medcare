<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Validator;


class LoginController extends BaseController
{
	use AuthenticatesUsers;
	
	public function __construct()
	{
		$this->middleware('guest:api')->except('logout');
	}
	
	/**
	 * Register api
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function login(Request $request)
	{
		$validator = Validator::make($request->all(), ['email' => 'required|email', 'password' => 'required',]);
		
		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors());
		}
		
		// For manually logging the user in
		$user = Client::where('email', $request->email)->first();
		if ($user) {
			if (Hash::check($request->password, $user->password)) {
				$apiToken = uniqid(base64_encode(Str::random(60)));
//
//				// Update Token
				$login = Client::where('email', $request->email)->update(['api_token' => hash('sha256', $apiToken)]);
				
				if ($login) {
					return $this->sendResponse(Arr::add(Arr::except($user,'api_token'), 'access_token', $apiToken), 'Login Success.');
//					return $this->sendResponse(['name' => $user->name, 'email' => $user->email, 'access_token' => $apiToken], 'Login Success.');
				} else {
					return $this->sendError('Server Error');
				}
				
			} else {
				return $this->sendError('User Unauthorised');
			}
		} else {
			return $this->sendError('User Unauthorised');
		}
	}
	
	/**
	 * Update the authenticated user's API token.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function logout(Request $request)
	{
		$request->user()->forceFill(['api_token' => null])->save();
		return $this->sendResponse([],'Logout Success.');
	}
	
	/**
	 * details api
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function details()
	{
		$user = Auth::User();
		return $this->sendResponse($user, 'User Details Retrieved Successfully.');
	}
	
	use AuthenticatesUsers;
	
	protected function guard()
	{
		return Auth::guard('api');
	}
	
}