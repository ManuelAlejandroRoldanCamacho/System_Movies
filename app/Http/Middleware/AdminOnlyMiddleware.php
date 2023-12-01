<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminOnlyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Obtener el usuario autenticado
            $user = Auth::user();

            // Verificar si el usuario tiene el rol de 'Admin'
            if ($user->user_rol === 'Admin') {
                return $next($request);
            }
        }

        // Redirigir a una ruta específica o mostrar un mensaje de error
        return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página como administrador.');
    }

}
