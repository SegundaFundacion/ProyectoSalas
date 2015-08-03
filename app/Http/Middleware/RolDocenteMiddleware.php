<?php namespace App\Http\Middleware;
use Closure;
use Auth;
class RolDocenteMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $user = Auth::user();
        $rol_doc= \App\Models\Rol::whereNombre('DOCENTE')->first();
    
        if(!$rol_doc->usuarios()->find($user->rut))
        {
            return redirect('auth/login');
        }
        
		return $next($request);
	}
}