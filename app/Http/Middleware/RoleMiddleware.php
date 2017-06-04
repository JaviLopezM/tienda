<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 4/06/17
 * Time: 2:30
 */

namespace App\Http\Middleware;

use closure;
use Illuminate\Support\Facades\Session;


class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->role != $role) {
            return view('welcome')->with(Session::flash('flash_permiso', 'No tienes permisos suficientes para acceder a este apartado'));
        }
        return $next($request);
    }
}