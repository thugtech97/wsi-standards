<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPagePermission
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            $permission = $user->permissions()->where('name', $request->route()->getName())->first();
           
            if ($permission) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized to access this page.');
    }
}
