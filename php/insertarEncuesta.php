<?php 

	require_once "conexion.php";
if (isset($_POST["respuesta"])) {
	$conexion=conexion();
	$pregunta = $_POST["id_pregunta"];
	$encuesta = $_POST["id_encuesta"];
	$usuario = $_POST["id_usuario"];
	$sql="CALL sp_insertar_respuesta('".$_POST["respuesta"]."','$pregunta','$encuesta','$usuario')";

	mysqli_query($conexion,$sql);
	mysqli_close($conexion);
}
 ?>