<?php namespace App\Http\Controllers\Excel;


use App\Http\Requests;
use App\Models\Campus;
use App\Models\Facultad;
use App\Models\Departamento;
use App\Models\Escuela;
use App\Models\Carrera;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Asignatura;
use App\Models\Curso;
use App\Models\Sala;
use App\Models\Tipodesala;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \Illuminate\Contracts\Auth\Guard as Auth;

class FilesController extends Controller{


    public function getCampus($id){
        $Campus = Campus::find($id);
        //dd($Campus);
        if ($Campus) {
            $data = array(
                array('nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado'),
                array($Campus->nombre, $Campus->direccion, $Campus->latitud, $Campus->longitud, $Campus->descripcion, $Campus->rut_encargado),
            );
            Excel::create('Campus' . $Campus->nombre, function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        } else {
            abort('404');
        }
    }

     public function getCampusall(){
        $Campus = Campus::paginate();
        $data = array(
            array('nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado'),
        );
        foreach($Campus as $camp){
            $datos = array();
            array_push($datos,$camp->nombre,$camp->direccion,$camp->longitud,$camp->latitud,$camp->descripcion,$camp->rut_encargado);
            array_push($data,$datos);
        }
        Excel::create('Campus', function ($excel) use ($data) {
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('csv');
    }

    public function getFacultad($id){
        $Facultad = Facultad::find($id);
        //dd($Facultad);
        if($Facultad){
            $data = array(
                array('nombre_facultad','campus_perteneciente','descripcion'),
                array($Facultad->nombre,Campus::find($Facultad->campus_id)->nombre,$Facultad->descripcion),
            );
            Excel::create('Facultad_'.$Facultad->nombre, function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getFacultadall(){
        $Facultad = Facultad::paginate();
        //dd($Facultad);
        if($Facultad){
            $data = array(
                array('nombre_facultad','campus_perteneciente','descripcion'),
            );
            foreach($Facultad as $Facult){
                $datos = array();
                array_push($datos,$Facult->nombre,Campus::find($Facult->campus_id)->nombre,$Facult->descripcion);
                array_push($data,$datos);
            }
            Excel::create('Facultades', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getDepartamento($id){
        $Depto = Departamento::find($id);
        if($Depto){
            $data = array(
                array('nombre_departamento','facultad_pertenciente','descripcion'),
                array($Depto->nombre,Facultad::find($Depto->facultad_id)->nombre,$Depto->descripcion),   
            );
            Excel::create('Depto_'.$Depto->nombre, function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }
    public function getDepartamentoall(){
        $Depto = Departamento::paginate();
        //dd($Depto);
        if($Depto){
            $data = array(
                array('nombre_departamento','facultad_pertenciente','descripcion'),
            );
            foreach($Depto as $departamento){
                //dd($departamento->facultad->nombre);
                array_push($data,array($departamento->nombre,$departamento->facultad->nombre,$departamento->descripcion));
            }
            Excel::create('Departamentos', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getEscuelall(){
        $Escuela = Escuela::paginate();
        //dd($Escuela);
        if($Escuela){
            $data = array(
                array('nombre_escuela', 'depto_perteneciente', 'descripcion'),
            );
            foreach($Escuela as $escuela){
                array_push($data,array($escuela->nombre,$escuela->departamento->nombre,$escuela->descripcion));
            }
            Excel::create('Escuelas', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getCarrerall(){
        $carreras = Carrera::paginate();
        if($carreras){
            $data = array(
                array('nombre_carrera','codigo_carrera','escuela_perteneciente','descripcion'),
            );
            foreach($carreras as $carrera){
                array_push($data,array($carrera->nombre,$carrera->codigo,$carrera->escuela->nombre,$carrera->descripcion));
            }
            Excel::create('Carreras', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getDocenteall(){
        $docente = Docente::paginate();
        //dd($users);
        if($docente){
            $data = array(
                array('nombres','apellidos','rut','e-mail'),
            );
            foreach($docente as $doc){
                        array_push($data,array($doc->nombres,$doc->apellidos,$doc->rut,$doc->email));
                
            }
            Excel::create('DOCENTE', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getEstudianteall(){
        $estudiante = Estudiante::paginate();
        //dd($users);
        if($estudiante){
            $data = array(
                array('nombres','apellidos','rut','e-mail'),
            );
            foreach($estudiante as $estud){
                        array_push($data,array($estud->nombres,$estud->apellidos,$estud->rut,$estud->email));
                
            }
            Excel::create('ESTUDIANTE', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }

    public function getAsignaturaEncarall(){
        $asignatura = Asignatura::paginate();
        if($asignatura){
            $data = array(
                array('nombre','codigo','departamento','descripcion'),
                );
            foreach($asignatura as $asig){
                array_push($data,array($asig->nombre,$asig->codigo,$asig->departamento->nombre,$asig->descripcion));
            }
        }
        Excel::create('Asignaturas', function ($excel) use ($data) {
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('csv');
    }

    public function getCursoEncarall(){
        $curso = Curso::paginate();
        if($curso){
            $data = array(
                array('asignatura','docente','semestre','anio','seccion'),
                );
            foreach($curso as $curs){
                array_push($data,array($curs->asignatura->nombre,$curs->docente->nombres,$curs->semestre,$curs->anio,$curs->seccion));
            }
        }
        Excel::create('Cursos', function ($excel) use ($data) {
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('csv');
    }

    public function getSalall(){
        $salas = Sala::paginate();
        if($salas){
            $data = array(
                array('nombre_sala','campus_perteneciente','tipo_sala','descripcion'),
                );
            foreach($salas as $sala){
                array_push($data,array($sala->nombre,Campus::find($sala->campus_id)->nombre,Tipodesala::find($sala->tipo_sala_id)->nombre,$sala->descripcion));
            }
        }
        Excel::create('Salas', function ($excel) use ($data) {
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('csv');
    }

    public function getTposalall(){
        $tipos = Tipodesala::paginate();
        //dd($tipo);
        if($tipos){
            $data = array(
                array('nombre','descripcion'),
            );
            foreach($tipos as $tipo){
                array_push($data,array($tipo->nombre,$tipo->descripcion));
            }
            Excel::create('Tipodesala', function ($excel) use ($data) {
                $excel->sheet('Sheetname', function ($sheet) use ($data) {
                    $sheet->fromArray($data);
                });
            })->download('csv');
        }
    }









}