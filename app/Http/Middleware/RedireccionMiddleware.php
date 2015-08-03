<?php namespace App\Http\Middleware;
use Closure;
use Auth;
class RedireccionMiddleware {
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
		
        if($user->roles[0]->nombre == 'ADMINISTRADOR'){
			return view('menuadministrador.index');
        }

		elseif ($user->roles[0]->nombre == 'ENCARGADO_CAMPUS'){
            return view('menuencargado.index');
        }
        elseif($user->roles[0]->nombre =='ESTUDIANTE'){
            return view('menuestudiante.index');
        }

        elseif($user->roles[0]->nombre =='DOCENTE'){
            return view('menudocente.index');
        }
		return $next($request);
	}
}