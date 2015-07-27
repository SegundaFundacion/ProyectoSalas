<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRolesusuariosRequest;
use Illuminate\Http\Request;

class RolesusuariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("rolesusuarios.index")->with('rolesusuarios', \App\Models\Rol_Usuario::paginate(5)->setPath('rolesusuario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{   
		$rol = \App\Models\Rol::lists('nombre', 'id');
		return view('rolesusuarios.create')->with('rol',$rol);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRolesusuariosRequest $request)
	{
		$rolesusuarios = new \App\Models\Rol_Usuario;
		$rolesusuarios->rut = \Request::input('rut');
		$rolesusuarios->rol_id = \Request::input('rol_id');
		$rolesusuarios->save();
		return redirect()->route('rolesusuarios.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$rolesusuarios = \App\Models\Rol_Usuario::find($id);
		$rol = \App\Models\Rol::find($rolesusuarios->rol_id);
		return view('rolesusuarios.show')->with('rolesusuario',$rolesusuarios)->with('rol',$rol);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$rol = \App\Models\Rol::lists('nombre', 'id');
		return view('rolesusuarios.edit')->with('rolesusuario', \App\Models\Rol_Usuario::find($id))->with('rol',$rol);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateRolesusuariosRequest $request)
	{
		$rolesusuarios = \App\Models\Rol_Usuario::find($id);
		$rolesusuarios->rut = \Request::input('rut');
		$rolesusuarios->rol_id = \Request::input('rol_id');
		$rolesusuarios->save();
		return redirect()->route('rolesusuarios.index')->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$rolesusuarios = \App\Models\Rol_Usuario::find($id);
		$rolesusuarios->delete();
		return redirect()->route('rolesusuarios.index');
	}

}