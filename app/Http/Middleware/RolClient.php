<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RolClient
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
        if(Auth::user()->isAdmin()){
            return redirect('/admin');
        }
        else if(Auth::user()->isArtisan()){
            return redirect('/artisan');
        }
        else if(Auth::user()->isClient()){
            return $next($request);
        }
    }
}
