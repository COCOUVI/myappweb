<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChekAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $age = $request->input('age');
    //     //  dd($age);
    //     if (is_null($age)) {
    //         // Gérer le cas où l'âge n'est pas fourni
    //         return redirect()->route('home')->with('error', 'Âge non fourni.');
    //     }

    //     if ($age < 18) {
    //         return redirect()->route('home')->with('error', 'Vous devez avoir 18 ans ou plus.');
    //     }

    //     return  redirect()->route('regist');
    // }
}
