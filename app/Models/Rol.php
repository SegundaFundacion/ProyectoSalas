<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

	protected $table = 'roles';
	protected $fillable = ['nombre','descripcion'];

    public function roles_usuarios()
    {
    	return $this->hasMany('App\Models\Usuario');
    }

}
