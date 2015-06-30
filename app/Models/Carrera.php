<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

	protected $table = 'carreras';
	protected $fillable = ['escuela_id','codigo','nombre','descripcion'];

    public function escuela()
    {
    	return $this->belongsTo('App\Models\Escuela');
    }

    public function estudiantes()
    {
    	return $this->hasMany('App\Models\Estudiante');
    }

}
