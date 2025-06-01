<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Agar bu aynan video.play route bo‘lsa
        $referer = $request->headers->get('referer');

        if (!auth()->check() || !$referer || !str_contains($referer, url('/course/learning'))) {
            return redirect('/')->with('error', 'Permission denied');
        }

        return $next($request);
    }
}
