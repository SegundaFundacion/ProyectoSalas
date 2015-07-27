<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRolesusuariosRequest extends Request {

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
			
             
            "rut" => "required|min:7|max:8|integer",
			"rol_id" => "required"
            

		];
	}

}
