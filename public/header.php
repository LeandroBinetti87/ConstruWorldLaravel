<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Proyecto</title>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/all.min.css">
    	<link rel="stylesheet" href="css/styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <header class="page-headerb">
    <div class="page-header-containerb containerb">
      <!--<a id="logo" href="index.php">ConstruWorld</a>-->
	  <a id="logo" href="index.php" style="padding-left: 20px;"><img src="images/C2_t.png" style="max-width:80%; height:auto; " alt="Logo"></a>
      <nav class="main-nav">
        <ul>
          <li><a class="nav-link nav1" href="preguntas">Preguntas Frecuentes</a></li>
          <li><a class="nav-link nav1" href="servicios2">Servicios</a></li>
		  <?php if(!isset($_SESSION['nombre'])){
					echo "<li><a class='nav-link nav1' href='reg1'>Registracion</a></li>
		  <li><a class='nav-link nav1' href='log1'>Login</a></li>";} ?>
        </ul>
      </nav>
    </div>
  </header>