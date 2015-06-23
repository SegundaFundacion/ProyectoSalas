<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Tipos_SalasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 		return view('tiposdesalas.index')->with('tiposdesalas', \App\Models\Tipo_De_Sala::paginate(5)->setPath('tiposdesala'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tiposdesalas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tiposdesalas = new \App\Models\Tipo_De_Sala;
		$tiposdesalas->nombre = \Request::input('nombre');
		$tiposdesalas->descripcion = \Request::input('descripcion');
		$tiposdesalas->save();
		return redirect()->route('tiposdesalas.index')->with('message', '¡Se ha agregado tipo de sala exitosamente!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tiposdesalas = \App\Models\Tipo_De_Sala::find($id);
		return view('tiposdesalas.show')->with('tiposdesala',$tiposdesalas);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('tiposdesalas.edit')->with('tiposdesala', \App\Models\Tipo_De_Sala::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tiposdesalas = \App\Models\Tipo_De_Sala::find($id);
		$tiposdesalas->nombre = \Request::input('nombre');
		$tiposdesalas->descripcion = \Request::input('descripcion');
		$tiposdesalas->save();
		return redirect()->route('tiposdesalas.edit', ['tiposdesala' => $id])->with('message', '¡Se han guardado los cambios exitosamente!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tiposdesalas = \App\Models\Tipo_De_Sala::find($id);
		$tiposdesalas->delete();
		return redirect()->route('tiposdesalas.index')->with('message', '¡Se ha eliminado tipo de sala exitosamente!');
	}

}
