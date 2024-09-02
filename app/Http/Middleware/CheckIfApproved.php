<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfApproved
{
    public function handle(Request $request, Closure $next)
    {
        // Add your middleware logic here
        
        return $next($request);
    }
}
