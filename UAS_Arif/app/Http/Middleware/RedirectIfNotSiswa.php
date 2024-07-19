<?php

// app/Http/Middleware/RedirectIfNotSiswa.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotSiswa
{
    public function handle(Request $request, Closure $next, $guard = 'siswa')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/login'); // atau route lain untuk login siswa
        }

        return $next($request);
    }
}

