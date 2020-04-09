<?php 
	
	require_once "conexion.php";

	$conexion=conexion();

	$nombre=$_POST['nombre'];
	$mensaje=$_POST['mensaje'];


	$sql="CALL sp_insertar_datos('$nombre','$mensaje')";

	mysqli_query($conexion,$sql);

	mysqli_close($conexion);

 ?>