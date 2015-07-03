<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateHorariosRequest extends Request {

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
			

			'fecha' => 'required|date_format:"m/d/Y',
			'salas_id' => 'required|integer',
			'periodo_id' => 'required|integer',
			'curso_id' => 'required|integer',



		];
	}

}
