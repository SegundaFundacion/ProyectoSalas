<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateHorariosRequest;
use Illuminate\Http\Request;

class HorariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("horarios.index")->with('horarios', \App\Models\Horario::paginate(5)->setPath('horario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periodo = \App\Models\Periodo::lists('bloque','id');
		$sala = \App\Models\Sala::lists('nombre','id');
		$curso = \App\Models\Curso::lists('asignatura_id','id');
		return view('horarios.create')->with('periodo',$periodo)->with('salas',$sala)->with('curso',$curso);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateHorariosRequest $request)
	{
		$horario = new \App\Models\Horario;
		$horario->fecha = \Request::input('fecha');
		$horario->sala_id = \Request::input('salas_id');
	    $horario->periodo_id = \Request::input('periodo_id');
		$horario->curso_id = \Request::input('curso_id');
		$horario->save();
		return redirect()->route('horarios.index')->with('message', 'horario Agregado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$horario = \App\Models\Horario::find($id);
        $periodo = \App\Models\Periodo::find($horario->periodo_id);
		$sala = \App\Models\Sala::find($horario->sala_id);
		$curso = \App\Models\Curso::find($horario->sala_id);
		return view('horarios.show')->with('horario',$horario)->with('periodo',$periodo)->with('sala',$sala)->with('curso',$curso);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$periodos = \App\Models\Periodo::lists('bloque','id');
		return view('horarios.edit')->with('horario', \App\Models\Horario::find($id))->with('periodos',$periodos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateHorariosRequest $request)
	{
		$horario = \App\Models\Horario::find($id);
		$horario->fecha = \Request::input('fecha');
		$horario->sala_id = \Request::input('sala_id');
		$horario->periodo_id = \Request::input('periodo_id');
		$horario->curso_id = \Request::input('curso_id');
		$horario->save();
		return redirect()->route('horarios.index', ['horario' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$horario = \App\Models\Horario::find($id);
		$horario->delete();
	    return redirect()->route('horarios.index')->with('message', 'Horario eliminado con éxito');
	}

}
