<?php

namespace App\Http\Middleware;

use Closure;

class ActiveUser
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
         if (auth()->user()->status == 'Inactive') {
            $user = auth()->user();
            auth()->logout();
            return redirect()->route('login')
                ->withMessage('Your account was ' . $user->status);
        }
		return $next($request);
    }
}
