<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

	protected $table = 'estudiantes';
	protected $fillable = ['carrera_id','rut','nombre','apellidos','email'];

    public function carreras()
    {
    	return $this->belongsTo('Carrera');
    }

    public function cursos()
    {
    	return $this->belongsToMany('Curso','asignaturas_cursadas','estudiante_id','curso_id')->withTimestamps();
    }

}
