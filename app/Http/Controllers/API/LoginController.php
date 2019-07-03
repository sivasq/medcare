<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;


class LoginController extends BaseController
{
	
	public function __construct()
	{
		$this->middleware('guest:api')->except('logout');
	}
	
	protected function guard()
	{
//		return Auth::guard('api');
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
//		dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
		// For manually logging the user in
//		dd(Auth::guard('api')->check(['email' => $request->email, 'password' => $request->password]));
		
		$user = Client::where('email', $request->email)->first();
		if($user){
			if(Hash::check($request->password, $user->password)){
				$apiToken = uniqid(base64_encode(str_random(60)));
				// Update Token
				$postArray = ['api_token' => $apiToken];
				$login = Client::where('email',$request->email)->update($postArray);
				
				if($login) {
					return response()->json([
						'name'         => $user->name,
						'email'        => $user->email,
						'access_token' => $apiToken,
					]);
				}
				
			}
			return "nope";
		}
		
		
//		if(Auth::attempt(['email' => $request->email, 'password' => request('password')])){
//			return 'true';
//			$user = Auth::client();
//			$user['token'] = $user->createToken('MyApp')->accessToken;
//			return $this->sendResponse($user, 'Login Success.');
//			return $this->sendResponse('', 'Login Success.');
//		}
//		return $this->sendResponse('', 'Login Success.');
//		else{
//			return $this->sendError('User Unauthorised');
//		}
	}
	
	use AuthenticatesUsers;
	
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
	
}