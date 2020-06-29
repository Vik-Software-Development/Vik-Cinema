<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->url() == route('admin.dashboard')) {          //se a rota que tiver acessando for a de dashboard do admin
            if (Auth::check() ? $request->user()->Admin : false) {  //se tiver logado e for um admin
                return $next($request);                             //prossiga
            }
            return redirect()->route('login');
        }
        if ($request->url() == route('login')) {                    //se a rota for a de login
            if (Auth::check()) {                                    //verifica se ja está logado
                return redirect()->back();
            }
            return $next($request);
        }
    }
}
