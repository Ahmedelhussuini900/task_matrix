<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role !== $role) {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
