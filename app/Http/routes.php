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



Route::controller('files','Excel\FilesController',[

	'getCampus'                 => 'files.Campus',
	'getCampusall'              => 'files.Campusall',
]);





Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');


Route::get('cesar', function()
{
    return 'me funciono ';
});

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);


Route::get('/home', ['as' => 'home', 'middleware' => ['auth', 'redir'], function(){
    return 'home';
}]);


   
Route::resource('facultades','Backend\FacultadesController');
Route::resource('departamentos','Backend\DepartamentosController');
Route::resource('funcionarios','Backend\FuncionariosController');
Route::resource('escuelas','Backend\EscuelasController');
Route::resource('carreras','Backend\CarrerasController');
Route::resource('docentes','Backend\DocentesController');
Route::resource('estudiantes','Backend\EstudiantesController');
Route::resource('roles','Backend\RolesController');
Route::resource('rolesusuarios','Backend\RolesusuariosController');
Route::resource('campus','Backend\CampusController');




Route::resource('asignaturas','Backend\AsignaturasController');
Route::resource('cursos','Backend\CursosController');
Route::resource('periodos','Backend\PeriodosController');
Route::resource('tiposdesalas','Backend\TiposdesalasController');
Route::resource('salas','Backend\SalasController');
Route::resource('horarios','Backend\HorariosController');




Route::controller('auth', 'Auth\AuthController', [
    'getLogin'  => 'auth.login',
    'postLogin' => 'auth.doLogin',
    'getLogout' => 'auth.logout'
]);




//Route::get('menuadmin', ['middleware' => ['auth','roladmin'],'as'=>'menuadministrador.index','uses'=> 'Backend\MenuAdministradorController@index']);
//Route::get('menuencar', ['middleware' => ['auth', 'rolencargado'],'as'=>'menuencargado.index','uses'=> 'Backend\MenuEncargadoController@index']); 
//Route::get('menudocen', ['middleware' => ['auth','roldocent'],'as'=>'menudocente.index','uses'=> 'Backend\MenuDocenteController@index']);
//Route::get('menuestudi', 'Backend\MenuEstudianteController@index');
//Route::get('menuadmin','Backend\MenuAdministradorController@index');


