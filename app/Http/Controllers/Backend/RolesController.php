<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RolesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("roles.index")->with('roles', \App\Models\Rol::paginate(5)->setPath('rol'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('roles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$roles = new \App\Models\Rol;
		$roles->nombre = \Request::input('nombre');
		$roles->descripcion = \Request::input('descripcion');
		$roles->save();
		return redirect()->route('roles.index')->with('message', '¡Se ha agregado rol exitosamente!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$roles = \App\Models\Rol::find($id);
		return view('roles.show')->with('rol',$roles);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('roles.edit')->with('rol', \App\Models\Rol::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$roles = \App\Models\Rol::find($id);
		$roles->nombre = \Request::input('nombre');
		$roles->descripcion = \Request::input('descripcion');
		$roles->save();
		return redirect()->route('roles.index')->with('message', '¡Se han guardado los cambios exitosamente!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$roles = \App\Models\Rol::find($id);
		$roles->delete();
		return redirect()->route('roles.index')->with('message', '¡Se ha eliminado rol exitosamente!');
	}

}
