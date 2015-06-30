<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model {

	protected $table = 'facultades';
	protected $fillable = ['nombre','latitud','campus_id','descripcion'];

    public function campus()
    {
    	return $this->belongsTo('App\Models\Campus');
    }

    public function departamentos()
    {
    	return $this->hasMany('App\Models\Departamento');
    }

}
