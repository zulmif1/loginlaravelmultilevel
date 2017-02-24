<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class Language
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
        if (Session::has('locale')) {
            echo "if";
            $locale=Session::get('locale', Config::get('app.locale'));
        }else{
            echo "else";
            $locale='en';
        }

        // echo Config::get('app.locale');

        App::setLocale($locale);
        return $next($request);
    }
}
