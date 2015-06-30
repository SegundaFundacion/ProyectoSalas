<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

	protected $table = 'cursos';
	protected $fillable = ['semestre','anio','seccion','docente_id', 'asignatura_id'];

    public function docente()
    {
    	return $this->belongsTo('App\Models\Docente');
    }

     public function asignatura()
    {
    	return $this->belongsTo('App\Models\Asignatura');
    }

    public function estudiantes()
    {
    	return $this->belongsToMany('App\Models\Estudiante','asignaturas_cursadas','curso_id','estudiante_id')->withTimestamps();
    }

    public function horarios()
    {
    	return $this->hasMany('App\Models\Horario');
    }

}
