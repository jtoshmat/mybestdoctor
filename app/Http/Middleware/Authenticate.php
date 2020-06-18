<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    protected $guards = [];

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;
        if (false == Auth::guard('doctor')->check()) {
            return redirect()->route('doctor.login');
        }

        return parent::handle($request, $next, ...$guards);
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (reset($this->guards) === 'doctor') {
                return route('doctor.login');
            }
            return route('doctor.login');
        }

        if (!$request->expectsJson()) {
            if (reset($this->guards) === 'patient') {
                return route('patient.login');
            }
            return route('patient.login');
        }
    }
}

