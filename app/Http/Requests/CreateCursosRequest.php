<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCursosRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			
             'asignatura_id' => 'required|integer',
             'semestre' => 'required|integer',
             'anio' => 'required|integer',
             'seccion' => 'required|integer',
             'docente_id' => 'required|integer',
             


		];
	}

}
