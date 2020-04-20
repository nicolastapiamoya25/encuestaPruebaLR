<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$id_asistencia=$_POST['id_asistencia'];
    $estadoAU=$_POST['estadoAU'];
    $rutAU=$_POST['rutAU'];




    if($estadoAU==2){
        $sql="CALL sp_actualizar_asistente('$estadoAU','$id_asistencia','$rutAU')";
        echo mysqli_query($conexion,$sql);
    }else if($estadoAU==1){
        $sql="CALL sp_actualizar_asistente('$estadoAU','$id_asistencia',null)";
        echo mysqli_query($conexion,$sql);
    }


									
	
 ?>