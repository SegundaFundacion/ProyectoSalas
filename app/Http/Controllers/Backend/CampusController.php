<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CampusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("campus.index")->with('campus', \App\Models\Campus::paginate(5)->setPath('campu'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('campus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$campus = new \App\Models\Campus;
		$campus->nombre = \Request::input('nombre');
		$campus->direccion = \Request::input('direccion');
		$campus->latitud = \Request::input('latitud');
		$campus->longitud = \Request::input('longitud');
		$campus->descripcion = \Request::input('descripcion');
		$campus->rut_encargado = \Request::input('rut_encargado');
		$campus->save();
		return redirect()->route('campus.index')->with('message', '¡Se ha agregado el Campus!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$campus = App\Models\Campus::find($id);
		if($campus)
			return view('campus.show')->with('campus', $campus);
		else
			abort(404);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('campus.edit')->with('campu', \App\Models\Campus::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$campus = \App\Models\Campus::find($id);
		$campus->nombre = \Request::input('nombre');
		$campus->direccion = \Request::input('direccion');
		$campus->latitud = \Request::input('latitud');
		$campus->longitud = \Request::input('longitud');
		$campus->descripcion = \Request::input('descripcion');
		$campus->rut_encargado = \Request::input('rut_encargado');
		$campus->save();
		return redirect()->route('campus.edit', ['campu' => $id])->with('message', '¡Se han hecho los cambios!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$campus = \App\Models\Campus::find($id);
		$campus->delete();
		return redirect()->route('campus.index')->with('message', '¡Se ha eliminado exitosamente el Campus!');
	}

}
