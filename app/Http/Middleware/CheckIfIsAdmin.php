<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIfIsAdmin
{
   
    public function handle (Request $request, Closure $next): Response {

        if (Auth::user()->isAdm()) {
            return $next($request);
        }

        return redirect()->route('home');

    }
    
}
