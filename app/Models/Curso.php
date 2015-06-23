<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

	protected $table = 'cursos';
	protected $fillable = ['semestre','anio','seccion','docente_id', 'asignatura_id'];

    public function docentes()
    {
    	return $this->belongsTo('Docente');
    }

     public function asignaturas()
    {
    	return $this->belongsTo('Asignatura');
    }

    public function estudiantes()
    {
    	return $this->belongsToMany('Estudiante','asignaturas_cursadas','curso_id','estudiante_id')->withTimestamps();
    }

    public function horarios()
    {
    	return $this->hasMany('Horario');
    }

}
