<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $profileId)
    {
        if(!isset(Auth::user()->perfil_id)){
            return redirect('/home');
        }else if(Auth::user()->perfil_id != $profileId){
            return redirect('/home');
        }

        return $next($request);

    }
}
