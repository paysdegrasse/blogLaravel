<?php

namespace App\Http\Middleware

use Closure;
use Illuminate\Http\RedirectResponse;

/********************************
*
*  Ce middleware a pour but de vérifier que l’utilisateur connecté est un administrateur, 
*  ce qui sera utile pour autoriser l’accès à la zone d’administration
*
*
**********************************/


class IsAdmin
{

    /**
     * Handle an incoming request
     * Manipuler une nouvelle requete
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	if(session('statut') === 'admin')
	{
	    return $next($request);
	}
	return new RedirectResponse(url('/'));
    }
}
