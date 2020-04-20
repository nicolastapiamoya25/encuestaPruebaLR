<?php 
	
	require_once "conexion.php";

	$conexion=conexion();

	$nombre=$_POST['nombreIn'];
    $rut=$_POST['rutIn'];
    $dv=$_POST['dvIn'];
    $direccion=$_POST['direccionIn'];
    $telefono=$_POST['telefonoIn'];
    $email=$_POST['emailIn'];


	$sql="CALL sp_insertar_formulario_asistencia('$nombre','$rut','$dv','$direccion','$telefono','$email')";

	echo mysqli_query($conexion,$sql);

	mysqli_close($conexion);

 ?>