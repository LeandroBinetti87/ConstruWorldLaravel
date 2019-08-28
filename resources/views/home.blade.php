@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">		
		@if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                    <!--¡Estás logueado!-->
		<div class='main-profile'>
		<!--<img class='profile-picture' style='margin-top: 10px;' height='200px' src='images/bill_gates.jpg' alt='Usuario'>-->
		<?php $path = "usuarios/" . $_SESSION['name'] . $_SESSION['surname'] . "." . $_SESSION['ext'];?>
		<img class='profile-picture' style='margin-top: 10px;' height='200px' src='<?php echo $path; ?>' alt='Usuario'>
		<!--<h2 style='text-align:center;'>Bill Gates</h2>-->
			<h3 style='text-align:center;'>
				<p><?php echo "<br>" . $datos_usuario["name"] . " " . $datos_usuario["surname"] ?></p>
				<p><?php echo "Documento: " . $datos_usuario["dni"]?></p>
				<p><?php echo "Fecha de nacimiento: " . $datos_usuario["birthdate"]?></p>
				<p><?php echo "Correo: " . $datos_usuario["email"]?></p>
				<p><?php if($datos_usuario["userkind"] == 'usuario')
							echo "Es USUARIO";
						 else if ($datos_usuario["userkind"] == 'prestador')
							 echo "Es PRESTADOR DE SERVICIOS";
						 else echo "Tipo de usuario indefinido";
					?></p>
				<p><?php if ($datos_usuario["userkind"] == 'prestador')
					       echo "Oficio: " . $datos_usuario["profesion"]?></p>
				<p><?php echo "Vive en: " . $datos_usuario["barrio"]?></p>
				<!--<p><?php //echo "SESION: " . $_SESSION['name'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['surname'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['dni'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['email'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['birthdate'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['userkind'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['profesion'] . "<br>";?></p>
				<p><?php //echo "SESION: " . $_SESSION['barrio'] . "<br>";?></p>
				<p><?php //echo $path . "<br>";?></p>-->
				
				<?php if(isset($_SESSION['name']) && $datos_usuario["userkind"] == 'usuario'){
					echo "<br><a href='/cwdbuser'>Calificar prestadores</a>";
				}?>
			</h3>
		</div>
    </div>
</div>
@endsection
