<?php

namespace App\Http\Middleware;

use Closure;
use App\Guest;

class DefineGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($session_id = $request->cookie('session_id')) {
            $guest = Guest::where('session_id', $session_id)->first();
            $request->attributes->add(['guest' => $guest]);
            return $next($request);
        } else {
            $guest = new Guest;
            $guest->session_id = str_random(32);
            $guest->save();
            $request->attributes->add(['guest' => $guest]);
            return $next($request)->withCookie('session_id', $guest->session_id, 60*24*365*4);
        }
    }
}
