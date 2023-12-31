<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin == 1) {
            return $next($request);
        }
        // Redirect to login page or show unauthorized page
        return redirect('/login');
    }
}
