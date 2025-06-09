<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
use Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Check if a locale is stored in session, else use default
        $locale = Session::get('locale', config('app.locale'));

        App::setLocale($locale);

        return $next($request);
    }
}