<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

	protected $table = 'docentes';
	protected $fillable = ['departamento_id','rut','nombre','apellidos'];

    public function departamentos()
    {
    	return $this->belongsTo('Departamento');
    }

    public function asignaturas()
    {
    	return $this->belongsToMany('Asignatura', 'cursos',  'docente_id', 'asignatura_id');
    }


}
