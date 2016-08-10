<?php

namespace App\Http\MiddleWare;

use Closure;

class IsAjax
{
    public function handle($request, Closure $next)
    {
	if ($request->ajax())
	{
	    return $next($request);
	}
	abort(404);
    }
}
