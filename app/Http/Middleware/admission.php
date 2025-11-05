<?php

namespace App\Http\Middleware;

use Closure;

class admission
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
         if ($request->user()->status=="admission" || $request->user()->status=="active" ) {
         return $next($request);

         }

         else{
         auth()->logout();
         return redirect()->route('login')
         ->withError('Opps!! Looks Like Subscription Needed.');

         }
    }
}
