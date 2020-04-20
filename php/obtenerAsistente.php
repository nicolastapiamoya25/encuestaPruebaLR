<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['idasistencia'];
	$sql="CALL sp_obtener_asistente($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
			'id_asistencia'=>$ver[0],
              'nombreAU'=>$ver[1],
              'rutAU'=>$ver[2],
              'estadoAU'=>$ver[7]
					);
	echo json_encode($datos);
 ?>