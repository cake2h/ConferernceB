<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class  Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        
        if(auth()->user()->role !== 'admin') {
            return redirect()->route('welcome');
        }
        else return $next($request);
    }
}
