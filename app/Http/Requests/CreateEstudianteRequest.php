<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEstudianteRequest extends Request {

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

             'carrera_id' => 'required|integer',
             'rut' => 'required|integer',
             'nombres' => 'required|string',
             'apellidos' => 'required|string',
             'email' => 'required|email',
			
		];
	}

}
