<?php
/**
 * Created by PhpStorm.
 * User: Sivaraj
 * Date: 22-04-2019 022
 * Time: 15:40
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Http\Request;
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
		$validator = Validator::make($request->all(), [
			'first_name' => 'required',
			'last_name' => 'required',
			'phone' => 'required|unique:users',
			'country' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required',
			'c_password' => 'required|same:password',
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors());
		}

		$input = $request->all();
		$input['password'] = bcrypt($input['password']);
		$user = User::create($input);
		$success['token'] = $user->createToken('MyApp')->accessToken;
		$success['name'] = $user->first_name . ' ' . $user->first_name;

		return $this->sendResponse($success, 'User register successfully.');
	}
}