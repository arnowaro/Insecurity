<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\isAdmin;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user= Auth::user();



        if (!Auth::check()) {
            abort(403, 'connectez vous à votre compte admin');
            //return route('login');
        }


        if (Auth::check() && $user->admin == 1) {
            return $next($request);


        }

        else {

            return redirect()->route('home')->with('error', " Vous n'avez pas l'autorisation d'accéder à cette page");
        }


    }
}
