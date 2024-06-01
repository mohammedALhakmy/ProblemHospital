<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminTOPLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth('admin')->user();
//        dd($user);
        if (auth('admin')->check() && $user->code){
            if (!$request->is('verify*')){
                return redirect()->route("verify.index");
            }
        }
        return $next($request);
    }
}
