<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consulta</title>

<link rel="stylesheet" href="form.css" >
</head>

<body>
<form class="Consulta-form" method="POST">

	<h1>Consulta </h1>
	<label for="sintomas"> Sintomas : </label>
	<textarea id="sintomas" name="sintomas"></textarea>

	<label for="receta"> Receta Medica: </label>
	<textarea id="receta" name="receta"></textarea>
    
    
    
   <center> <input type="submit" id="Agregar" value="Agregar" name="btn2"></center>
    
</form>

	 <?php
	 if(isset($_POST['btn2'])){


	 include ("Conexion.php");
	 $sinto= $_POST['sintomas'];
	 $recet= $_POST['receta'];

$db->query("INSERT INTO $consulta(Sintomas, RecetaMedica) values ('$sinto','$recet')");

	}
 
      	
  ?>


</body>
</html>