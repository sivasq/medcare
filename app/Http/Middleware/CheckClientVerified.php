<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class CheckClientVerified
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
		if (($request->user() instanceof MustVerifyEmail && !$request->user()
				->hasVerifiedEmail())) {
			return $request->expectsJson() ? response(['success' => false, 'data' => '', 'message' => 'Your email address is not verified'], 403) : '';
		}

		return $next($request);
	}
}
