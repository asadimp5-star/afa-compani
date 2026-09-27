<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       
        if($request->path()=='/' || empty($request->segment(1)))
        {
            return to_route('index.home');
        }
        
        $locale = $request->segment(1);
        
        if(!array_key_exists($locale ,config('app.locales'))){
           $segment = $request->segments();
            
            
            $segment[0] = config('app.locale');
           
            return redirect(implode('/',$segment));   
           
        }
           App::setLocale($locale);
           Session::put('locale',$locale);
           URL::defaults(['locale' => $locale]);
        
        
           
        return $next($request);
    }

}