<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol_Usuario extends Model {

	protected $table = 'roles_usuarios';
	protected $fillable = ['rut','rol_id'];

    public function roles()
    {
    	return $this->belongsTo('App\Models\Rol');
    }
}
