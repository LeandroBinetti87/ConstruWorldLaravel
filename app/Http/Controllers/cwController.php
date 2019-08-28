<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\cwModel;

use Illuminate\Support\Facades\Input;

class cwController extends Controller
{
    public function escribebase(){
		$proyecto = new cwModel();
		$id = cwModel::all()->last()->id;
		$id++;
		$proyecto->id = $id;
		$proyecto->id_usuario = $_GET['id_usuario'];
		$proyecto->id_prestador = $_GET['id_prestador'];
		$proyecto->descripcion = $_GET['descripcion'];
		$proyecto->calificacion = $_GET['calificacion'];
		$proyecto->nombre_usuario = $_GET['nombre_usuario'];
		$proyecto->nombre_prestador = $_GET['nombre_prestador'];
		$proyecto->save();
		$resultadoABM = "Proyecto agregado <br> " . $proyecto;
		return view('proymod', compact('resultadoABM'));
	}
	
	public function modificabase(){
		$proyecto = new cwModel();
		$proyecto = cwModel::find($_GET['nro']);
		$proyecto->id_usuario = $_GET['id_usuario'];
		$proyecto->id_prestador = $_GET['id_prestador'];
		$proyecto->descripcion = $_GET['descripcion'];
		$proyecto->calificacion = $_GET['calificacion'];
		$proyecto->nombre_usuario = $_GET['nombre_usuario'];
		$proyecto->nombre_prestador = $_GET['nombre_prestador'];
		$proyecto->save();
		$resultadoABM = "Proyecto modificado<br> " . $proyecto;
		return view('proymod', compact('resultadoABM'));
	}
	
	public function borrarbase(){
		$proyecto = cwModel::find($_GET['nro']);
		$proyecto->delete();
		$resultadoABM = "Proyecto borrado " . $proyecto;
		return view('proymod', compact('resultadoABM'));
	}
}
