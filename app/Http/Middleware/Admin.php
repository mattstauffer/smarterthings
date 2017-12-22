<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! auth()->check() || ! auth()->user()->isAdmin()) {
            Log::error('User ' . auth()->id() . ' tried to do something but should not have.');
            abort(401, "Get out of my house.");
        }

        return $next($request);
    }
}
