<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleWare
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
        if($request->route('id') == '-666'){
            return redirect()->route('adShow');
        }
        return $next($request);
    }
}
