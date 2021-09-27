<?php

namespace App\Http\Middleware;

use closure;
use Exception;

final class CheckForRole
{
    /**
     * @param         $request
     * @param closure $next
     * @param         $role
     * @return mixed
     * @throws Exception
     */
	public function handle($request, Closure $next, $role)
	{
		$user = $request->user();

		if(! $user->hasRole($role)) {
			throw new Exception('Your role is unauthorized');
		}

		return $next($request);
	}
}
