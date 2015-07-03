<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAsignaturasRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;

class AsignaturasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("asignaturas.index")->with('asignaturas', \App\Models\Asignatura::paginate(5)->setPath('asignatura'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = \App\Models\Departamento::lists('nombre','id');
		return view('asignaturas.create')->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAsignaturasRequest $request)
	{
		$asignaturas = new \App\Models\Asignatura;
		$asignaturas->nombre = \Request::input('nombre');
		$asignaturas->codigo = \Request::input('codigo');
		$asignaturas->descripcion = \Request::input('descripcion');
		$asignaturas->departamento_id = \Request::input('departamento_id');
		$asignaturas->save();
		return redirect()->route('asignaturas.index')->with('message', 'asignaturas Agregado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$asignaturas = \App\Models\Asignatura::find($id);
        $departamento = \App\Models\Departamento::find($asignaturas->departamento_id);
		return view('asignaturas.show')->with('asignatura',$asignaturas)->with('departamentos',$departamento);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$departamentos = \App\Models\Departamento::lists('nombre','id');
		return view('asignaturas.edit')->with('asignatura', \App\Models\Asignatura::find($id))->with('departamentos',$departamentos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateAsignaturasRequest $request)
	{
		$asignaturas = \App\Models\Asignatura::find($id);
		$asignaturas->nombre = \Request::input('nombre');
		$asignaturas->codigo = \Request::input('codigo');
		$asignaturas->descripcion = \Request::input('descripcion');
		$asignaturas->departamento_id = \Request::input('departamento_id');
		$asignaturas->save();
		return redirect()->route('asignaturas.index', ['asignatura' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$asignaturas = \App\Models\Asignatura::find($id);
		$asignaturas->delete();
		return redirect()->route('asignaturas.index')->with('message', 'asignaturas Eliminado con éxito');
	}

}
