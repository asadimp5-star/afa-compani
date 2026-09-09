<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
   
        if(Auth::check()){
          
          if(Auth::user()->role == 1){
            return to_route('/admin');
          }else{
            return to_route('admin.users.user-dashboard');
          }
        }
        $response = $next($request);

        return $response->header('Cache-Control','no-cach , no-store , max-age=0 , must-revalidate')->header('Pragma','no-cach')->header('Expires', 'Sat 01 jan 1990 00:00:00 GMT');
    }
}
