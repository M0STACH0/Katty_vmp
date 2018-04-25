<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva Cita</title>
	<link rel="stylesheet" href="form.css">
</head>
<body>

	<div id="wrapper">
			<header>
				<h1>Bienvenido</h1>
				<nav>
					<ul class="menu_principal">
						<li><a href="index.html">inicio</a></li>
						<li><a href="formulariopacientes.html">nuevo paciente</a></li>
						<li><a href="formularioCitas.html">nueva cita</a></li>
					</ul>
				</nav>
			</header>

<form class="FormularioPacientes-form"  method="POST">

	<h1>Nueva Cita</h1>
	<label for="cedula"> # Cédula: </label>
	<input type="text" id="cedulas" name="cedulas">

	<label for="nombre"> Nombre: </label>
	<input type="text" id="nombre" name="nombre">

	<label for="fecha"> Fecha: </label>
	<input type="text" id="fechas" name="fechas">


	<center><input type="submit" id="Cita" value="Crear Cita" class="btn btn-success" name="btn2"></center>	
</form>
	 <?php
  	if(isset($_POST['btn2']))
  	{
  		include("Conexion.php");

      $Cedu =$_POST['cedulas'];
      $fecha=$_POST['fechas'];


  		$conexion->query("INSERT INTO $tabla_db2 (cedula,fecha) values ('$Cedu','$fecha')");   
  	
  	}
  ?>


</body>
</html>