<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAge
{
    public int $age;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Bỏ qua middleware cho route input_age
        if ($request->is('input_age') || $request->is('handle-input-age')) {
            return $next($request);
        }
        
        if((session("age")) == null){
            return redirect("input_age");
        }
        return $next($request);
        
        
        
        
    }
}
