<?php 

	require_once "conexion.php";
if (isset($_POST["respuesta"])) {
	$conexion=conexion();
	$pregunta = $_POST["pregunta"];
	$encuesta = $_POST["nombre_encuesta"];
	$sql="CALL sp_insertarEncuesta_datos('$encuesta','$pregunta','".$_POST["respuesta"]."')";

	echo mysqli_query($conexion,$sql);
	mysqli_close($conexion);
}
 ?>