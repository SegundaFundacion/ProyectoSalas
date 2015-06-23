<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {

	protected $table = 'funcionarios';
	protected $fillable = ['departamento_id','rut','nombre','apellidos'];

    public function departamentos()
    {
    	return $this->belongsTo('Departamento');
    }
    

}
