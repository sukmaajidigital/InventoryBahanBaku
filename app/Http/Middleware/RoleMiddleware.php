<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        // role
        // 1 = admin
        // 2 = direktur
        // 3 = hrd
        // 4 = staffhrd
        // 5 = kabag
        // 6 = karyawan
        $user = Auth::user();
        if (!in_array($user->role, $roles)) {
            abort(403, 'ANDA TIDAK ADA AKSES KE HALAMAN INI KAKAK.');
        }
        return $next($request);
    }
}
