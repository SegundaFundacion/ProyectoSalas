<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDocenteRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DocentesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("docentes.index")->with('docentes', \App\Models\Docente::paginate(5)->setPath('docente'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('docentes.create')->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateDocenteRequest $request)
	{
		$docentes = new \App\Models\Docente;
		$docentes->departamento_id = \Request::input('departamento_id');
		$docentes->rut = \Request::input('rut');
		$docentes->nombres = \Request::input('nombres');
		$docentes->apellidos = \Request::input('apellidos');
		$docentes->save();
		return redirect()->route('docentes.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$docentes = \App\Models\Docente::find($id);
		$departamento = Departamento::find($docentes->departamento_id);
		return view('docentes.show')->with('docente',$docentes)->with('departamento',$departamento);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$departamento = Departamento::lists('nombre','id');
		return view('docentes.edit')->with('docente', \App\Models\Docente::find($id))->with('departamento',$departamento);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateDocenteRequest $request)
	{
		$docentes = \App\Models\Docente::find($id);
		$docentes->departamento_id = \Request::input('departamento_id');
		$docentes->rut = \Request::input('rut');
		$docentes->nombres = \Request::input('nombres');
		$docentes->apellidos = \Request::input('apellidos');
		$docentes->save();
		return redirect()->route('docentes.index', ['docente' => $id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$docentes = \App\Models\Docente::find($id);
		$docentes->delete();
		return redirect()->route('docentes.index');
	}

}
