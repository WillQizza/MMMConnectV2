<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate {

    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has("id")) {
            return redirect("/register");
        }

        return $next($request);
    }

}
