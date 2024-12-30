<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\VisitorLog;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Catat kunjungan
        VisitorLog::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'visited_at' => now(),
        ]);

        return $next($request);
    }
}
