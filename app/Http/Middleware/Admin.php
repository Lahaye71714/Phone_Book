<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        //dd(Auth::user()->name);
        if ((Auth::user()->name != 'Archy_admin')) {
            abort(403, "Cannot access to restricted page");
        }
        return $next($request);
    }
}
