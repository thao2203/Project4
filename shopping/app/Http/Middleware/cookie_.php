<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class cookie_
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
        if(!Cookie::get('id'))
        {    $lifetime = time() + 60 * 60 * 24 * 365;// one year
          
          //  return $lifetime;
          return $next($request)->cookie(Cookie::make('id', (string) Str::uuid(), $lifetime));
        }
        return $next($request);
    }
}
