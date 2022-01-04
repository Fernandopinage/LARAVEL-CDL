<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiddlewareOms
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session('oms_id')){
            return redirect('login/militar');
        }
        return $next($request);
    }
}
