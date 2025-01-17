<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkSalary
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
        echo 'middleware msg from checkSalary';
        if($request->sal && $request->sal<50000){
            return redirect('noaccess');
        }
        return $next($request);
    }
}
