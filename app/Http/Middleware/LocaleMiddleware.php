<?php

namespace App\Http\Middleware;

use App\Services\Settings\Settings;
use Closure;

class LocaleMiddleware
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
        if(session()->has('locale')) {
            app()->setLocale(session('locale'));
        }else {
            if(!empty($request->header('lang'))){
                app()->setLocale($request->header('lang'));
            }else{
                app()->setLocale(\settings('default_lang') ?? config('app.locale'));
            }
        }

        return $next($request);
    }
}
