<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

		protected $table = 'asignaturas';
		protected $fillable = ['codigo','nombre','descripcion','departamento_id'];

	    public function departamentos()
	    {
	    	return $this->belongsTo('Departamento');
	    }
	    
	    public function docentes()
	    {
	    	return $this->belongsToMany('Docente','cursos','asignatura_id','docente_id')->withTimestamps();
	    }

}
