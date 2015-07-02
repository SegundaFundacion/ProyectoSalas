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



Route::resource('campus','Backend\CampusController');
Route::resource('facultades','Backend\FacultadesController');
Route::resource('departamentos','Backend\DepartamentosController');
Route::resource('funcionarios','Backend\FuncionariosController');
Route::resource('escuelas','Backend\EscuelasController');
Route::resource('carreras','Backend\CarrerasController');
Route::resource('docentes','Backend\DocentesController');
Route::resource('estudiantes','Backend\EstudiantesController');
Route::resource('roles','Backend\RolesController');
Route::resource('asignaturas','Backend\AsignaturasController');
Route::resource('cursos','Backend\CursosController');
Route::resource('periodos','Backend\PeriodosController');
Route::resource('rolesusuarios','Backend\RolesusuariosController');
Route::resource('tiposdesalas','Backend\TiposdesalasController');
Route::resource('salas','Backend\SalasController');
Route::resource('horarios','Backend\HorariosController');
Route::get('menuadmin', 'Backend\MenuAdministradorController@index');
Route::get('menuencar', 'Backend\MenuEncargadoController@index');
Route::get('menudocen', 'Backend\MenuDocenteController@index');
Route::get('menuestudi', 'Backend\MenuEstudianteController@index');




