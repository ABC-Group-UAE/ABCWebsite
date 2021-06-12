<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Config;
class SetLanguage
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
        if(($request->segment(1)!='en') && ($request->segment(1)!='fr')&& ($request->segment(1)!='ar')){
            App::setLocale('en');
        }else{
            App::setlocale($request->segment(1));
        }
        return $next($request);
    }
}
