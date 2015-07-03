<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSalasRequest extends Request {

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
			

                   'campus_id' => 'required|integer',
                   'tipo_sala_id' => 'required|integer',
                   'nombre' => 'required|string',
                   'descripcion' => 'required|string',


		];
	}

}
