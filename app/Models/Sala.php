<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model {

	protected $table = 'salas';
	protected $fillable = ['campus_id','tipo_sala_id','nombre','descripcion'];

    public function campus()
    {
    	return $this->belongsTo('App\Models\Campus');
    }

    public function tipos_salas()
    {
    	return $this->belongsTo('App\Models\Tipo_De_Sala');
    }

    public function horarios()
    {
    	return $this->hasMany('App\Models\Horario');
    }

}
