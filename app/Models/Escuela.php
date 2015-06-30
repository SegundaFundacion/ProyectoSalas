<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model {

	protected $table = 'escuelas';
	protected $fillable = ['nombre','departamento_id','descripcion'];

    public function departamento()
    {
    	return $this->belongsTo('App\Models\Departamento');
    }

     public function carreras()
    {
    	return $this->hasMany('App\Models\Carrera');
    }
    

}
