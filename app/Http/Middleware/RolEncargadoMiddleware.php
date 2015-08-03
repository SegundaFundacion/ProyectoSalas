<?php namespace App\Http\Middleware;
use Closure;
class RolEncargadoMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = \Auth::user();

        if($user){
            if($user->roles()->get()[0]->nombre != 'ENCARGADO_CAMPUS')
                return redirect()->route('auth.login');
        }
        else{
            return redirect()->route('auth.login');
        }

		/*$rol_encargado = \App\Models\Rol::whereNombre('ENCARGADO_CAMPUS')->first();
		if(!$rol_encargado->usuarios()->find($user->rut))
		{
			return redirect('auth/login');
		}*/

		return $next($request);
	}
}