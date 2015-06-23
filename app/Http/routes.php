<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('cesar', function()
{
    return 'me funciono ';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('asinaturas','Backend\AsignaturasController');
Route::resource('campus','Backend\CampusController');
Route::resource('carreras','Backend\CarrerasController');
Route::resource('cursos','Backend\CursosController');
Route::resource('departamentos','Backend\DepartamentosController');
Route::resource('docentes','Backend\DocentesController');
Route::resource('escuelas','Backend\EscuelasController');
Route::resource('estudiantes','Backend\EstudiantesController');
Route::resource('facultades','Backend\FacultadesController');
Route::resource('funcionarios','Backend\FuncionariosController');
Route::resource('horarios','Backend\HorariosController');
Route::resource('periodos','Backend\PeriodosController');
Route::resource('roles','Backend\RolesController');
Route::resource('rolesusuarios','Backend\Roles_UsuariosController');
Route::resource('salas','Backend\SalasController');
Route::resource('tipodesalas','Backend\Tipos_SalasController');

Route::get('/admin/menu','Backend\MenuController@menuAdministrador');
Route::get('/encargado/menu','Backend\MenuController@menuEncargado');

