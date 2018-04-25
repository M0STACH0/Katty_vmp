<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Pacientes</title>
	<link rel="stylesheet" href="form.css">
</head>
<body>

<form action="formulariopacientes.php" method="POST" class="FormularioPacientes-form">

	<h1>Registar Pacientes</h1>

	<label for="Cedula"> # Cédula: </label>
	<input type="text"  id="cedula"  name="cedula">

	<label for="Nombre"> Nombre: </label>
	<input type="text" id="nombre" name="nombre">

	<label for="Apellido1"> Primer Apellido: </label>
	<input type="text"  id="apellido" name="apellido">

	<label for="Apellido2"> Segundo Apellido: </label>
	<input type="text"  id="apellido2" name="apellido2">


    <label for="Fecha"> Fecha de Nacimiento: </label>
	<input type="text"  id="fecha" name="fecha">

	<label for="Correo"> Correo Electrónico: </label>
	<input type="text"  id="correo" name="correo">

	<label for="Telefono"> # Télefono: </label>
	<input type="text"  id="telefono" name="telefono">

	<input type="submit"  id="Agregar" value="Agregar" class="btn btn-success"  name="btn1" >
</form>
	 <?php
  	if(isset($_POST['btn1']))
  	{
  		include("conexion.php");

      $Cedu =$_POST['cedula'];
      $nom=$_POST['nombre'];
      $Apellido=$_POST['apellido'];
      $Apellido2=$_POST['apellido2'];
      $FechaN=$_POST['fecha'];
      $CorreoE=$_POST['correo'];
      $tele=$_POST['telefono'];

  		
  		$conexion->query("INSERT INTO $tabla_db1 (Cedula,Nombre,Apellido1,Apellido2,Nacimiento,Correo,Telefono) values ('$Cedu','$nom',    
        '$Apellido','$Apellido2','$FechaN','$CorreoE','$tele')");	
  	}
  ?>
</body>
</html>