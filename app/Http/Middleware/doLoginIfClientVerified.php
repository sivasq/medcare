<?php

namespace App\Http\Middleware;

use Closure;

class doLoginIfClientVerified
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$response = $next($request);

		if(!isNull($response->original))
		{

		}
		return response(['success' => false, 'data' => $response->original, 'message' => 'Your email address is not 
		verified'], 403);
		//		return response()->json($ResponseData, 200);
		//		return $response;
	}
}
