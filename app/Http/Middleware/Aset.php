<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Aset
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()){
            if(Auth::user()->level == 'aset'){
                return $next($request);
            }
            return back()->with('error', 'Anda tidak memiliki akses ke halaman Aset');
        }
        return redirect('/')->with('error', 'Silahkan login ...');
    }
}
