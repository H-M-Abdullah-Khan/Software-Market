<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $userType
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $userType): Response
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized access.'], 401);
        }
    
        if (Auth::user()->role === $userType) {
            return $next($request);
        }

        // Return a forbidden response if the user does not have access
        return redirect('404');
    }
}