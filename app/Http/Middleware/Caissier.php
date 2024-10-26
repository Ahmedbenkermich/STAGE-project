<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Caissier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('/'); // Use route name instead of URL
        }

        $userRole = Auth::user()->type_user;

        if ($userRole == 'caissier') {
            return $next($request);
        }

        if ($userRole == 'agent') {
            return redirect()->route('agent.dashboard');
        }

        if ($userRole == 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Add a default redirect or error response if none of the roles match
        return redirect()->route('/')->with('error', 'Unauthorized access.');
    }
}
