<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

	protected $table = 'departamentos';
	protected $fillable = ['nombre','facultad_id','descripcion'];
   


    public function facultad()
    {
    	return $this->belongsTo('App\Models\Facultad');
    }

    public function docentes()
    {
    	return $this->hasMany('App\Models\Docente');
    }

    public function funcionarios()
    {
    	return $this->hasMany('App\Models\Funcionario');
    }

    public function asignaturas()
    {
    	return $this->hasMany('App\Models\Asignatura');
    }

    public function escuelas()
    {
    	return $this->hasMany('App\Models\Escuela');
    }


}
