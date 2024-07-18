<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        $url = $request->url(); // Obtiene la URL completa
        $path = $request->path(); // Obtiene el path de la URL

        Log::info('URL: ' . $url); // Registro para mostrar la URL completa
        Log::info('Path: ' . $path); // Registro para mostrar el path

        if (!Auth::check()) {
            return redirect()->route('cuenta.ingresar');
        }

        $user = Auth::user();
        Log::info('User role: ' . $user->rol . ' Email: ' . $user->email); // Registro para ver el rol del usuario

        if (!in_array($user->rol, $roles)) {
            Log::info('Access denied for role: ' . $user->rol  . ' Email: ' . $user->email); // Registro para ver si el acceso es denegado
            return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }
}
