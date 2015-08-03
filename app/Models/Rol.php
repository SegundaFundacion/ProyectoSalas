<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

	protected $table = 'roles';
	protected $fillable = ['nombre','descripcion'];

    public function roles_usuarios()
    {
    	return $this->hasMany('App\Models\Usuario');
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\Models\Usuario', 'roles_usuarios', 'rol_id', 'rut');
    }

}
