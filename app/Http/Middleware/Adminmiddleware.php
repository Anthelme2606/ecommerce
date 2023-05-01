<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check())
    {
  if(Auth::user()->role=='1')
  {
   return $next($request);
  }
  else{
    return redirect('/home')->with('message','acces refuse vous n etes as admin!!');

  }
    }
    else{

        return redirect('/login')->with('message','login pour acceder l info sur le website');
        
    }
        return $next($request);
    }
}
