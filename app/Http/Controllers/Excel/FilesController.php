<?php namespace App\Http\Controllers\Excel;


use App\Http\Requests;
use App\Models\Campus;
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





}