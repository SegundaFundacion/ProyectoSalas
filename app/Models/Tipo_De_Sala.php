<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_De_Sala extends Model {

	
	protected $incrementing = false ;
    protected $fillable = ['nombre','descripcion'];

    public function campus()
    {

    	return $this->belongsToMany('Campus','salas','tipo_sala_id','campus_id')->withTimestamps();
    }

}
