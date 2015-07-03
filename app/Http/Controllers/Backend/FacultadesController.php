<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFacultadRequest;
use App\Models\Campus;
use Illuminate\Http\Request;

class FacultadesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("facultades.index")->with('facultades', \App\Models\Facultad::paginate(5)->setPath('facultad'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$campus = \App\Models\Campus::lists('nombre','id');
		return view('facultades.create')->with('campus',$campus);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateFacultadRequest $request)
	{
		$facultad = new \App\Models\Facultad;

			$facultad->nombre = \Request::input('nombre');
			$facultad->campus_id = \Request::input('campus_id');
			$facultad->descripcion = \Request::input('descripcion');
			$facultad->save();
			return redirect()->route('facultades.index')->with('message', 'Se agrega facultad');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
			$facultad = \App\Models\Facultad::find($id);
			$campus = Campus::find($facultad->campus_id);
			return view('facultades.show')->with('facultad',$facultad)->with('campus',$campus);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			$campus = Campus::lists('nombre','id');
			return view('facultades.edit')->with('facultad', \App\Models\Facultad::find($id))->with('campus',$campus);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateFacultadRequest $request)
	{
			$facultad = \App\Models\Facultad::find($id);
			$facultad->nombre = \Request::input('nombre');
			$facultad->campus_id = \Request::input('campus_id');
			$facultad->descripcion = \Request::input('descripcion');
			$facultad->save();
			return redirect()->route('facultades.index', ['facultad' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			$facultad = \App\Models\Facultad::find($id);
			$facultad->delete();
			return redirect()->route('facultades.index')->with('message', 'Facultad Eliminada con éxito');
	}

}
