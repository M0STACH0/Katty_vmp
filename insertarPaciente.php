<?php  
  $host = "localhost";
	$user= "root";
	$pw= "";
	$db= "bigotes";

		$con = mysqli_connect($host, $user, $pw, $db)
			or die("problemas al conectar");
		mysql_select_db($db, $con)or die("problemas al conectar la db");

	$Cedula= $_POST['txtcedula'];
	$Nombre= $_POST['txtnombre'];
	$Apellido1= $_POST['txtapellido1'];
	$Apellido2= $_POST['txtapellido2'];
	$Nacimiento= $_POST['txtfecha'];
	$Correo= $_POST['txtcorreo'];
	$Telefono= $_POST['txttelefono'];

	$insertar= "INSERT into pacientes values('$Cedula', '$Nombre','$Apellido1','$Apellido2','$Nacimiento','$Correo','$Telefono')";

	$resultado= mysqli_query($con, $insertar)
	 or die ("ERROR al insertar");

	 mysqli_close($con);
	 echo "Datos insertados";
?>