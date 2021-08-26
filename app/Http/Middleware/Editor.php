<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class Editor
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
        if ((Auth::user()->name == 'Roxy_editor')) {
            return $next($request);
        } elseif ((Auth::user()->name == 'Archy_admin')) {
            return $next($request);
        }
        abort(403, "Cannot access to restricted page");
    }
}
