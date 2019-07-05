<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegisterController extends BaseController
{
	/**
	 * Register api
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function register(Request $request)
	{
		$validator = Validator::make($request->all(), ['first_name' => 'required', 'last_name' => 'nullable', 'gender' => 'nullable', 'dob' => 'nullable', 'email' => 'required|email|unique:clients', 'password' => 'required']);
		
		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors());
		}
		
		$request->request->add(['name' => $request->input('first_name') . ' ' . $request->input('last_name')]);
		$request->merge(['password' => Hash::make($request->get('password'))]);
		$request->merge(array_map('trim', $request->all()));
		
		$user = Client::create($request->all());
		
		event(new Registered($user));
		
		if ($user->exists) {
			return $this->sendResponse([], 'User register successfully.');
		} else {
			return $this->sendError([], 'User registration Error.');
		}
	}
	
}