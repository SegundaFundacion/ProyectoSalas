<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class FuncionariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("funcionarios.index")->with('funcionarios', \App\Models\Funcionario::paginate(5)->setPath('funcionario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('funcionarios.create')->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$funcionarios = new \App\Models\Funcionario;
		$funcionarios->departamento_id = \Request::input('departamento_id');
		$funcionarios->rut = \Request::input('rut');
		$funcionarios->nombres = \Request::input('nombres');
		$funcionarios->apellidos = \Request::input('apellidos');
		$funcionarios->save();
		return redirect()->route('funcionarios.index')->with('message', 'Funcionario Agregado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$funcionarios = \App\Models\Funcionario::find($id);
		$departamento = Departamento::find($funcionarios->departamento_id);
		return view('funcionarios.show')->with('funcionario',$funcionarios)->with('departamento',$departamento);
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
		return view('funcionarios.edit')->with('funcionario', \App\Models\Funcionario::find($id))->with('departamento',$departamento);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$funcionarios = \App\Models\Funcionario::find($id);
		$funcionarios->departamento_id = \Request::input('departamento_id');
		$funcionarios->rut = \Request::input('rut');
		$funcionarios->nombres = \Request::input('nombres');
		$funcionarios->apellidos = \Request::input('apellidos');
		$funcionarios->save();
		return redirect()->route('funcionarios.index', ['funcionario' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$funcionarios = \App\Models\Funcionario::find($id);
		$funcionarios->delete();
		return redirect()->route('funcionarios.index')->with('message', 'Funcionario Eliminado con éxito');
	}

}