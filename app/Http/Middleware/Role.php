<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
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
        $roles = explode('|',$roles);
        # Que usuario está iniciando sesión
        $user = Auth::user();
        # Verificar que el usuario que inica sesión tiene alguno de los roles que hay en la BD
        # Si el usuario no existe OR el Usuario tiene un rol = null OR
        # El rol que tiene el usuario no es alguno de los que contiene Roles
        if(!$user || !user->role || !in_array($user->role->label, $roles))
        {
            return abort(403, '¡No tiene el Rol necesario!.');
        }
        return $next($request);
    }
}
