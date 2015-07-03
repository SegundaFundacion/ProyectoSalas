<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEscuelasRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EscuelasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("escuelas.index")->with('escuelas', \App\Models\Escuela::paginate(5)->setPath('escuela'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('escuelas.create')->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEscuelasRequest $request)
	{
		$escuela = new \App\Models\Escuela;
		$escuela->nombre = \Request::input('nombre');
		$escuela->departamento_id = \Request::input('departamento_id');
		$escuela->descripcion = \Request::input('descripcion');
		$escuela->save();
		return redirect()->route('escuelas.index')->with('message', 'Escuela Agregada');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$escuela = \App\Models\Escuela::find($id);
		$departamento = Departamento::find($escuela->departamento_id);
		return view('escuelas.show')->with('escuela',$escuela)->with('departamento',$departamento);
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
		return view('escuelas.edit')->with('escuela', \App\Models\Escuela::find($id))->with('departamento',$departamento);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateEscuelasRequest $request)
	{
		$escuela = \App\Models\Escuela::find($id);
		$escuela->nombre = \Request::input('nombre');
		$escuela->departamento_id = \Request::input('departamento_id');
		$escuela->descripcion = \Request::input('descripcion');
		$escuela->save();
		return redirect()->route('escuelas.index', ['escuela' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$escuela = \App\Models\Escuela::find($id);
		$escuela->delete();
		return redirect()->route('escuelas.index')->with('message', 'Escuela Eliminada con éxito');
	}

}
