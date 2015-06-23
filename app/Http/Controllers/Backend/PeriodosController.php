<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeriodosController extends Controller {
					/**
					 * Display a listing of the resource.
					 *
					 * @return Response
					 */
					public function index()
					{
						return view("periodos.index")->with('periodos', \App\Models\Periodo::paginate(10)->setPath('periodo'));
					}
					/**
					 * Show the form for creating a new resource.
					 *
					 * @return Response
					 */
					public function create()
					{
						return view('periodos.create');
					}
					/**
					 * Store a newly created resource in storage.
					 *
					 * @return Response
					 */
					public function store()
					{
						$periodo = new \App\Models\Periodo;
						$periodo->bloque = \Request::input('bloque');
						$periodo->inicio = \Request::input('inicio_time');
						$periodo->fin = \Request::input('fin_time');
						$periodo->save();
						return redirect()->route('periodos.index')->with('message', '¡Se ha agregado periodo exitosamente!');
					}
					/**
					 * Display the specified resource.
					 *
					 * @param  int  $id
					 * @return Response
					 */
					public function show($id)
					{
						$periodo = \App\Models\Periodo::find($id);
						return view('periodos.show')->with('periodo',$periodo);
					}
					/**
					 * Show the form for editing the specified resource.
					 *
					 * @param  int  $id
					 * @return Response
					 */
					public function edit($id)
					{
						return view('periodos.edit')->with('periodo', \App\Models\Periodo::find($id));
					}
					/**
					 * Update the specified resource in storage.
					 *
					 * @param  int  $id
					 * @return Response
					 */
					public function update($id)
					{
						$periodo = \App\Models\Periodo::find($id);
						$periodo->bloque = \Request::input('bloque');
						$periodo->inicio = \Request::input('inicio_time');
						$periodo->fin = \Request::input('fin_time');
						$periodo->save();
						return redirect()->route('periodos.index', ['periodo' => $id])->with('message', '¡Se han guardados cambios exitosamente!');
					}
					/**
					 * Remove the specified resource from storage.
					 *
					 * @param  int  $id
					 * @return Response
					 */
					public function destroy($id)
					{
						$periodo = \App\Models\Periodo::find($id);
						$periodo->delete();
						return redirect()->route('periodos.index')->with('message', '¡Se ha eliminado periodo exitosamente!');
					}
				}