<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		
		if(Auth()->check()&& $request->user()->admin == 0){
			
			return redirect()->guest('home');
		}
        return $next($request);
    }
}
