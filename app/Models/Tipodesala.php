<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipodesala extends Model {

	protected $table = 'tipos_salas';
    protected $fillable = ['nombre','descripcion'];

    public function campus()
    {

    	return $this->belongsToMany('App\Models\Campus','salas','tipo_sala_id','campus_id')->withTimestamps();
    }

}
