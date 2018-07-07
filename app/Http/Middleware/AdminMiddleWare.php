<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use App\Http\Controllers\ApanelController;

class AdminMiddleWare
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
        if (User:: {
            return redirect('/home');
        }

        return $next($request);
    }
}
