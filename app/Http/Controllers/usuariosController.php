<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\usuariosModel;
use Illuminate\Support\Facades\Input;

class usuariosController extends Controller
{
    //
	public function dibujar_servicios(){
		require_once 'serviceList.php'; //Hay un $serviceList = sarasa;
		return view('servicios2', compact('serviceList'));
	}
	
	public function dibujar_profesionales(){
		require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['userkind'] == 'prestador')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function dibujar_carpinteros(){
		//require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['profesion'] == 'carpintero')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function dibujar_gasistas(){
		//require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['profesion'] == 'gasista')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function dibujar_plomeros(){
		//require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['profesion'] == 'plomero')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function dibujar_electricistas(){
		//require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['profesion'] == 'electricista')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function dibujar_mmos(){
		//require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['profesion'] == 'mmo')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function dibujar_arquitectos(){
		//require_once 'profesionesList.php'; //Hay un $serviceList = sarasa;
		$base = usuariosModel::all();
		$cnt = 0;
		$profesionales = [];
		foreach($base as $clave=>$valor){
			
			if($base[$clave]['profesion'] == 'arquitecto')
			{
			 $profesionales[$cnt++] = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}			
		}
		return view('profesiones', compact('profesionales'));
	}
	
	public function leerbase(Request $request){
		//echo "Este string se escribe en el controlador <br>";
		$var_sesion = $request->session()->all();
		$id_usuario = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'); //Devuelve un int con el id de usuario de la base de datos
		$id_usuario--; //Pues posición en array arranca de cero y contabilización en base de datos en uno.
		$base = usuariosModel::all();
		$datos_usuario = array("id" => $base[$id_usuario]['id'], "name" => $base[$id_usuario]['name'], "surname" => $base[$id_usuario]['surname'], "dni" => $base[$id_usuario]['dni'], "birthdate" => $base[$id_usuario]['birthdate'], "email" => $base[$id_usuario]['email'], "ext" => $base[$id_usuario]['ext'], "userkind" => $base[$id_usuario]['userkind'], "profesion" => $base[$id_usuario]['profesion'], "barrio" => $base[$id_usuario]['barrio']);
		session_start();
		$_SESSION['id'] = $datos_usuario['id'];
		$_SESSION['name'] = $datos_usuario['name'];
		$_SESSION['surname'] = $datos_usuario['surname'];
		$_SESSION['dni'] = $datos_usuario['dni'];
		$_SESSION['birthdate'] = $datos_usuario['birthdate'];
		$_SESSION['email'] = $datos_usuario['email'];
		$_SESSION['ext'] = $datos_usuario['ext'];
		$_SESSION['userkind'] = $datos_usuario['userkind'];
		$_SESSION['profesion'] = $datos_usuario['profesion'];
		$_SESSION['barrio'] = $datos_usuario['barrio'];
		return view ('home', compact('base', 'datos_usuario'));
		//Toma los datos de la base de datos y los pone en el array $datos_usuario para que los lea la vista home.blade.php. Además, los mete en variables de sesión.
	}
	
	public function contratar_profesionales(){
		//Le manda la base entera a la vista, y esta selecciona un prestador en función de la variable $_SESSION['contratar_a'];
		$base = usuariosModel::all();
		
		//Obtenemos id de prestador contratado a través de query string
		$file_id = Input::get('id_contract'); //use Illuminate\Support\Facades\Input;
		return view('contratar', compact('base', 'file_id'));
	}
	
	public function setearcontratar($id){
		$_SESSION['contratar_a_'] = $id;
		echo "Seteaste el usuario " . $_SESSION['contratar_a_'];
		$base = usuariosModel::all();
		return view('contratar', compact('base'));
	}
}
