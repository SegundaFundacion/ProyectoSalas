<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

	protected $table = 'docentes';
	protected $fillable = ['departamento_id','rut','nombre','apellidos'];

    public function departamento()
    {
    	return $this->belongsTo('App\Models\Departamento');
    }

    public function asignaturas()
    {
    	return $this->belongsToMany('App\Models\Asignatura', 'cursos',  'docente_id', 'asignatura_id');
    }


}
