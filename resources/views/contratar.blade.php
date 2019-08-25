@extends('layouts.app')

@section('content')
<div class="containerb" >
    <?php session_start();
    if(isset($_SESSION['name'])){
		echo "Iniciaste sesión como: " . $_SESSION['name'] . " " . $_SESSION['surname'] . " <br>DNI: " . $_SESSION['dni'] . " <br>Correo: " . $_SESSION['email'] . " ";
	} else echo "No iniciaste sesión";
	?>
  
   <div class="servicios-list" style="margin-top: 20px;">
  <!-- Los servicios -->
  <?php 
  echo $_SESSION['contratar_a'];
  echo "<h1>" . $_SESSION['name'] . " " . $_SESSION['surname'] . "</h1>";
  ?>
  
  <img src="<?php echo "/usuarios/" . $_SESSION['name'] . $_SESSION['surname'] . "." .$_SESSION['ext']; ?>" height="60px" style="border-radius: 50%;" alt= "Imagen" >
  
  <?php
  foreach($base as $clave=>$valor){
			
			if($base[$clave]['id'] == $_SESSION['contratar_a'])
			{
			 $profesional = array("id" => $base[$clave]['id'], "name" => $base[$clave]['name'], "surname" => $base[$clave]['surname'], "dni" => $base[$clave]['dni'],
			 "birthdate" => $base[$clave]['birthdate'], "email" => $base[$clave]['email'], "ext" => $base[$clave]['ext'],
			 "userkind" => $base[$clave]['userkind'], "profesion" => $base[$clave]['profesion'], "barrio" => $base[$clave]['barrio']);
			}
  }
  
  echo "<h1> contrata a " . $profesional['name'] . " " . $profesional['surname'] . " (Id de usuario: " . $profesional['id'] . ")</h1>";
  
  //mail($to_email_address,$subject,$message,[$headers],[$parameters]);
  ?>
  <img src="<?php echo "/usuarios/" . $profesional['name'] . $profesional['surname'] . "." .$profesional['ext']; ?>" height="60px" style="border-radius: 50%;" alt= "Imagen" >
  </div>
</div>
@endsection
