<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class visitormiddleware
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
        if (!Sentinel::check()) 
            # code...
        
        return $next($request);

        else{ 
            return redirect('girisyap');  
        }
    }

}
