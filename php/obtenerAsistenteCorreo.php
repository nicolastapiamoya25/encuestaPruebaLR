<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['idasistencia'];
	$sql="CALL sp_obtener_asistente($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
			'id_asistencia'=>$ver[0],
              'nombreCO'=>$ver[1],
              'rutCO'=>$ver[2],
              'correoCO'=>$ver[6]
					);
	echo json_encode($datos);
 ?>