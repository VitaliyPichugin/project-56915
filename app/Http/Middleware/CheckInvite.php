<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Invite;
use Illuminate\Support\Facades\Redirect;

class CheckInvite
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
        if (!Invite::whereCode($request->invite)->first()) {
            return Redirect::back()->withErrors(["Invite doesn't exists"]);
        }
        return $next($request);
    }
}
