<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FilledProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            !$request->user()->phone ||
            !$request->user()->user_type_id ||
            !$request->user()->city_id ||
            !$request->user()->team_id
        ) return redirect(route('profile.edit'));
        return $next($request);
    }
}
