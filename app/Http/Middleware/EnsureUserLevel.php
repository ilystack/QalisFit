<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserLevel
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $level): Response
    {
        if (auth()->check() && auth()->user()->level === $level) {
            return $next($request);
        }

        abort(403, 'Access denied.'); // atau bisa redirect ke dashboard sendiri
    }
}
